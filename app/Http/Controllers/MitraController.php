<?php

namespace App\Http\Controllers;


use App\Models\Mitra;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    public function index() {
        return Inertia::render('MitraView',[
            'mitra' => Mitra::all()->map(function($mitra){
                return [
                    'id'=>$mitra->id,
                    'name_mitra'=>$mitra->name_mitra,
                    'logo_mitra'=>$mitra->logo_mitra, 
                ];
            })
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name_mitra' => 'required|max:255',
            'logo_mitra' => 'required|image|max:2048', // Validation for image file
        ]);

        if ($request->hasFile('logo_mitra')) {
            $path = $request->file('logo_mitra')->store('mitra_logos', 'public'); // Store image in 'public/mitra_logos'
            $validated['logo_mitra'] = $path;
        }

        Mitra::create($validated);

        return Redirect::route('mitra.index');
    }
    
    public function destroy(Mitra $mitra) {
        // $mitra = Mitra::findOrFail($id);
        $mitra->delete();
        return Redirect::route('mitra.index');

    }

    public function update(Request $request, Mitra $mitra) {
        $validated = $request->validate([
            'name_mitra' => 'nullable|string|max:255',
            'logo_mitra' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $dataUpdate = [];
    
        // Only add 'name_mitra' if it exists in validated data
        if (array_key_exists('name_mitra', $validated)) {
            $dataUpdate['name_mitra'] = $validated['name_mitra'];
        }

        if ($request->hasFile('logo_mitra')) {
            $path = $request->file('logo_mitra');
            $fileName = $path->hashName();
            $path->storeAs('public/mitra', $fileName);
            $dataUpdate['logo_mitra'] = $fileName;
        }

        $mitra->update($dataUpdate);

        return Redirect::route('mitra.index')->with('success', 'Data mitra updated successfully');
    }

    
}
