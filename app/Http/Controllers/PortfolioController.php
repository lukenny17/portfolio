<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // Fetch all projects to display on the main portfolio page
        return view('portfolio', compact('projects'));
    }

    public function submitContact(){
        // Handle form submissions and save contact details.
    }

    public function showProject($id) 
    {
        $project = Project::findOrFail($id);
        
        //Return a view specific for showing project details
        return view('project-detail', compact('project')); 
    }
}
