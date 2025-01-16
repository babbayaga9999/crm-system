<?php
namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::all();
        return view('leads.index', compact('leads'));
    }

    public function create()
    {
        return view('leads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'status' => 'required|string',
        ]);

        Lead::create($request->all());

        return redirect()->route('leads.index')->with('success', 'Lead added successfully');
    }

    // Add other methods (show, edit, update) as needed
}
