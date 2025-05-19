<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Animal;
use Illuminate\Support\Facades\Log;

class AnimalController extends Controller
{
    //
    public function index()
    {
        $animals = Animal::all();
        return view('adopciones', compact('animals'));
    }

    public function store(Request $request)
    {
        try {
            Log::channel('api')->info('store Animal');
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'breed' => 'required|string|max:255',
                'age' => 'required|integer|min:0',
                'time_in_shelter' => 'required|string|max:255',
                'description' => 'required|string',
                'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            Log::channel('api')->info('validated');
            // Handle image upload
            if ($request->hasFile('image_path')) {
                $image = $request->file('image_path');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/animals'), $imageName);
                $validated['image_path'] = 'uploads/animals/' . $imageName;
            }

            Log::channel('api')->info('img stored');

            Animal::create($validated);

            Log::channel('api')->info('animal created');

            return redirect('/adopciones')->with('success', 'Mascota publicada correctamente.');
        } catch (\Exception $e) {
            Log::channel('api')->info('Error: ' . $e->getMessage());
            return redirect('/adopciones')->with('success', 'Mascota publicada correctamente.');
        }
    }

    public function adoptar(Request $request)
    {

        $validated = $request->validate([
            'animal_id' => 'required|int',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $animal = Animal::findOrFail($validated['animal_id']);

        Log::channel('api')->info('id: ' . $validated['animal_id']);

        $animal->update(['state' => 'adopted']);


        return redirect('/');
        
    }

    public function showAdoptarForm($id)
    {
        $animal = Animal::findOrFail($id);
        return view('formularioAdoptar', compact('animal'));
    }

    public function destroy($id)
    {
        try {
            $animal = Animal::findOrFail($id);

            // Delete image file if exists
            if ($animal->image_path && file_exists(public_path($animal->image_path))) {
                unlink(public_path($animal->image_path));
            }

            $animal->delete();

            return redirect('/adopciones')->with('success', 'Mascota eliminada correctamente.');
        } catch (\Exception $e) {
            Log::channel('api')->error('Error deleting animal: ' . $e->getMessage());
            return redirect('/adopciones')->with('error', 'No se pudo eliminar la mascota.');
        }
    }
}
