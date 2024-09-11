<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // Fetch all projects to display on portfolio page
        return view('portfolio', compact('projects'));
    }

    public function sendMessage(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Save contact data to the database
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
