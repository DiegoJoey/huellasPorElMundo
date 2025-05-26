<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    //

    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'phone' => 'required|string',
            'availability' => 'required|string',
            'message' => 'required|string|max:255',
        ]);
        Volunteer::create($validated);

        return redirect('/');
    }
}
