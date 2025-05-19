<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class DonationController extends Controller
{
    //

    public function donarAlimentos(Request $request)
    {

        try {
            $validated = $request->validate([
                'user_id' => 'required|int',
                'category' => 'required|string|max:255',
                'item' => 'required|string|max:255',
                'message' => 'nullable|string',
            ]);

            Donation::create($validated);

            return redirect('/');
        } catch (\Exception $e) {
            Log::channel('api')->info('Error: ' . $e->getMessage());
        }
    }

    public function alimentos($userId)
    {

        $user = User::findOrFail($userId);
        return view('alimentos', compact('user'));
    }
}
