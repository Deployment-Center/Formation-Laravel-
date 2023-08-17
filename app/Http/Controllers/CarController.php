<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = Car::all();
        return view('index', compact('voitures'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'marque' => 'required|max:50|min:3',
            'prix' => 'required|numeric',
        ]);

      Car::create($validatedData);

       return redirect('listes')->with('success', 'Voiture créer avec succèss');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);

        return view('edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'marque' => 'required|max:50|min:3',
            'prix' => 'required|numeric',
        ]);


        Car::whereId($request->id)->update($validatedData);

        return redirect('/listes')->with('success', 'Voiture mise à jour avec succèss');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect('/listes')->with('success', 'Voiture supprimer avec succèss');
    }
}
