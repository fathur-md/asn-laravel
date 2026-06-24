<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Comment;
use App\Models\Donation;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::with(['user', 'donations'])
            ->withSum('donations', 'amount')
            ->withCount('donations')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('campaigns.index', [
            'campaigns' => $campaigns,
        ]);
    }

    public function show($id)
    {
        $campaign = Campaign::with(['donations.user', 'comments.user'])->find($id);

        if (! $campaign) {
            abort(404);
        }

        return view('campaigns.show', [
            'campaign' => $campaign,
            'donations' => $campaign->donations,
            'comments' => $campaign->comments,
        ]);
    }

    public function create()
    {
        return view('campaigns.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'target_amount' => 'required|numeric|min:1000',
            'description' => 'required|string',
            'cover_image' => 'nullable|url',
        ]);

        $campaign = Campaign::create([
            'user_id' => auth()->id(),
            'title' => $data['title'],
            'category' => $data['category'],
            'target_amount' => $data['target_amount'],
            'current_amount' => 0,
            'donor_count' => 0,
            'status' => 'active',
            'description' => $data['description'],
            'cover_image' => $data['cover_image'] ?: 'https://images.unsplash.com/photo-1516569422542-23f5d04b9dca?auto=format&fit=crop&w=1200&q=80',
            'deadline_at' => now()->addWeeks(4),
        ]);

        return redirect()->route('campaigns.index')->with('success', 'Campaign baru berhasil ditambahkan.');
    }

    public function donate(Request $request, $id)
    {
        $campaign = Campaign::find($id);

        if (! $campaign) {
            abort(404);
        }

        $data = $request->validate([
            'amount' => 'required|numeric|min:1000',
            'donor_message' => 'nullable|string|max:300',
            'is_anonymous' => 'nullable|boolean',
        ]);

        $isAnonymous = $request->boolean('is_anonymous');

        $donation = Donation::create([
            'campaign_id' => $id,
            'user_id' => auth()->id(),
            'amount' => $data['amount'],
            'donor_message' => $data['donor_message'] ?: 'Semoga bermanfaat untuk campaign ini.',
            'is_anonymous' => $isAnonymous,
            'status' => 'paid',
            'paid_at' => now(),
        ]);

        $campaign->update([
            'current_amount' => $campaign->current_amount + $data['amount'],
            'donor_count' => $campaign->donor_count + 1,
        ]);

        return back()->with('success', 'Terima kasih atas donasi Anda!');
    }

    public function comment(Request $request, $id)
    {
        $campaign = Campaign::find($id);

        if (! $campaign) {
            abort(404);
        }

        $data = $request->validate([
            'content' => 'required|string|max:300',
        ]);

        Comment::create([
            'campaign_id' => $id,
            'user_id' => auth()->id(),
            'content' => $data['content'],
        ]);

        return back()->with('success', 'Komentar Anda telah ditambahkan.');
    }

    public function edit($id)
    {
        $campaign = Campaign::find($id);

        if (! $campaign) {
            abort(404);
        }

        return view('campaigns.edit', [
            'campaign' => $campaign,
        ]);
    }

    public function update(Request $request, $id)
    {
        $campaign = Campaign::find($id);

        if (! $campaign) {
            abort(404);
        }

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'target_amount' => 'required|numeric|min:1000',
            'description' => 'required|string',
            'cover_image' => 'nullable|url',
            'status' => 'required|in:draft,active,completed,cancelled',
        ]);

        $campaign->update([
            'title' => $data['title'],
            'category' => $data['category'],
            'target_amount' => $data['target_amount'],
            'description' => $data['description'],
            'cover_image' => $data['cover_image'] ?: $campaign->cover_image,
            'status' => $data['status'],
        ]);

        return redirect()->route('campaigns.show', $campaign)->with('success', 'Campaign berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $campaign = Campaign::find($id);

        if (! $campaign) {
            abort(404);
        }

        $campaign->delete();

        return redirect()->route('campaigns.index')->with('success', 'Campaign berhasil dihapus.');
    }
}
