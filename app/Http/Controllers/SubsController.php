<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;

use Illuminate\Http\Request;

class SubsController extends Controller
{
    public function store(Request $request) {

        $validated = $request ->validate([
            'full_name' => 'required|min:3',
            'email' => 'required',
        ]);

        Subscribe::create($validated);

        return back()->with('success', ' Thank you! Subscribed successfully');
    }
}
