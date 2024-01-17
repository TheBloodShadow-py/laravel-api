<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('type', 'technology')->paginate(6);
        if ($projects) {
            return response()->json(['success' => true, 'results' => $projects]);
        } else {
            return response()->json(['success' => false, 'results' => null]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        if ($project) {
            return response()->json(['success' => true, 'results' => $project->load('type', 'technology')]);
        } else {
            return response()->json(['success' => false, 'results' => null]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
