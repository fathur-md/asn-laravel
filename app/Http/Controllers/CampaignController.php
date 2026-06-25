<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Comment;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::with(['user'])
            ->withSum('donations', 'amount')
            ->withCount('donations')
            ->latest()
            ->get();

        return view('campaigns.index', [
            'campaigns' => $campaigns,
        ]);
    }

    public function show($id)
    {
        $campaign = Campaign::with([
            'user',
            'donations.user',
            'comments.user'
        ])->findOrFail($id);

        return view('campaigns.show', [
            'campaign' => $campaign
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
            'deadline_at' => 'required|date|after:today',
            'cover_image' => 'required|image|max:2048',
        ]);

        $path = $request->file('cover_image')
            ->store('campaigns', 'public');

        Campaign::create([
            'user_id' => auth()->id(),
            'title' => $data['title'],
            'category' => $data['category'],
            'target_amount' => $data['target_amount'],
            'current_amount' => 0,
            'donor_count' => 0,
            'status' => 'active',
            'description' => $data['description'],
            'cover_image' => $path,
            'deadline_at' => $data['deadline_at'],
        ]);

        return redirect()->route('campaigns.index')->with('success', 'Campaign baru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);

        return view('campaigns.edit', [
            'campaign' => $campaign,
        ]);
    }

    public function update(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'target_amount' => 'required|numeric|min:1000',
            'description' => 'required|string',
            'cover_image' => 'nullable|image|max:2048',
            'status' => 'required|in:draft,active,completed,cancelled',
        ]);

        $path = $campaign->cover_image;

        if ($request->hasFile('cover_image')) {
            if ($campaign->cover_image) {
                Storage::disk('public')->delete($campaign->cover_image);
            }

            $path = $request->file('cover_image')
                ->store('campaigns', 'public');
        }

        $campaign->update([
            'title' => $data['title'],
            'category' => $data['category'],
            'target_amount' => $data['target_amount'],
            'description' => $data['description'],
            'cover_image' => $path,
            'status' => $data['status'],
        ]);

        return redirect()
            ->route('campaigns.show', $campaign)
            ->with('success', 'Campaign berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $campaign = Campaign::findOrFail($id);

        if ($campaign->cover_image) {
            Storage::disk('public')->delete($campaign->cover_image);
        }

        $campaign->delete();

        return redirect()
            ->route('campaigns.index')
            ->with('success', 'Campaign berhasil dihapus.');
    }

    public function donate(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);

        $data = $request->validate([
            'amount' => 'required|numeric|min:1000',
            'donor_message' => 'nullable|string|max:300',
            'is_anonymous' => 'nullable|boolean',
        ]);

        $isAnonymous = $request->boolean('is_anonymous');

        Donation::create([
            'campaign_id' => $id,
            'user_id' => auth()->id(),
            'amount' => $data['amount'],
            'donor_message' => $data['donor_message'] ?? 'Semoga bermanfaat untuk campaign ini.',
            'is_anonymous' => $isAnonymous,
            'status' => 'paid',
            'paid_at' => now(),
        ]);
        $campaign->increment('current_amount', $data['amount']);
        $campaign->increment('donor_count');

        return back()->with('success', 'Terima kasih atas donasi Anda!');
    }

    public function comment(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);

        $data = $request->validate([
            'content' => 'required|string|max:300',
        ]);

        Comment::create([
            'campaign_id' => $campaign->id,
            'user_id' => auth()->id(),
            'content' => $data['content'],
        ]);

        return back()->with('success', 'Komentar Anda telah ditambahkan.');
    }
}
