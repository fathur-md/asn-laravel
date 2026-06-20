<?php

namespace App\Http\Controllers;

use App\Models\ProjectIdea;
use Illuminate\Http\Request;

class ProjectIdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ideas = ProjectIdea::latest('created_at')->get();
        return view('ideas.index', compact('ideas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        ProjectIdea::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectIdea $projectIdea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectIdea $projectIdea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectIdea $projectIdea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectIdea $idea)
    {
        /** @var \Illuminate\Database\Eloquent\Model $idea */
        $idea->delete();
        return redirect()->route('ideas.index');
    }
}
