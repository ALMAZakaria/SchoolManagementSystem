<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list of all enseignants
        $enseignants = Enseignant::all();
        return view('enseignants.index', compact('enseignants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create a new enseignant
        return view('enseignants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // store a new enseignant
        $enseignant = new Enseignant;
        $enseignant->name = $request->name;
        $enseignant->email = $request->email;
        $enseignant->phone = $request->phone;
        $enseignant->profession = $request->profession;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move('uploads/enseignants', $image->getClientOriginalName());
            $enseignant->image = $request->file('image')->getClientOriginalName();
        }
        $enseignant->save();
        return redirect()->route('enseignants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enseignant $enseignant)
    {
        // show
        return view('enseignants.show', compact('enseignant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enseignant $enseignant)
    {
        //
        return view('enseignants.edit', compact('enseignant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enseignant $enseignant)
    {
        //
        $enseignant->name = $request->name;
        $enseignant->email = $request->email;
        $enseignant->phone = $request->phone;
        $enseignant->profession = $request->profession;
        if ($request->hasFile('image')) {
            $old_image = $enseignant->image;
            unlink(public_path('uploads/enseignants/'. $old_image));
            $image = $request->file('image');
            $image->move('uploads/enseignants', $image->getClientOriginalName());
            $enseignant->image = $request->file('image')->getClientOriginalName();
        }
        $enseignant->update();
        return redirect()->route('enseignants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enseignant $enseignant)
    {
        //
        $old_image = $enseignant->image;
        unlink(public_path('uploads/enseignants/'. $old_image));
        $enseignant->delete();
        return redirect()->route('enseignants.index');
    }
}
