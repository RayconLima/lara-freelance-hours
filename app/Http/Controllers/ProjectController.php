<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('site.projects.index');
    }

    public function show(Project $project)
    {
        return view('site.projects.show', compact('project'));
    }

    public function create()
    {
        return view('site.new-project');
    }
}
