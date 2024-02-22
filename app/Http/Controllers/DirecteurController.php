<?php

namespace App\Http\Controllers;

use App\Models\Directeur;
use Illuminate\Http\Request;

class DirecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $directeurs = Directeur::all();
        return view('directeurs.index', compact('directeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('directeurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $directeur = new Directeur;
        $directeur->name = $request->name;
        $directeur->email = $request->email;
        $directeur->phone = $request->phone;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move('uploads/directeurs', $image->getClientOriginalName());
            $directeur->image = $request->file('image')->getClientOriginalName();
        }
        $directeur->save();
        return redirect()->route('directeurs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Directeur $directeur)
    {
        //
        return view('directeurs.show', compact('directeur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Directeur $directeur)
    {
        //
        return view('directeurs.edit', compact('directeur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Directeur $directeur)
    {
        //
        $directeur->name = $request->name;
        $directeur->email = $request->email;
        $directeur->phone = $request->phone;
        if ($request->hasFile('image')) {
            $old_image = $directeur->image;
            $image = $request->file('image');
            unlink(public_path('uploads/directeurs/' . $old_image));
            $image->move('uploads/directeurs', $image->getClientOriginalName());
            $directeur->image = $request->file('image')->getClientOriginalName();
        }
        $directeur->update();
        return redirect()->route('directeurs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Directeur $directeur)
    {
        //
        unlink(public_path('uploads/directeurs/' . $directeur->image));
        $directeur->delete();
        return redirect()->route('directeurs.index');
    }
}
