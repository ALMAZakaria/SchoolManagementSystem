<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $libraries = Library::all();
        return view('libraries.index', compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('libraries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //library have a name,description,image,number of books
        $library = new Library;
        $library->name = $request->name;
        $library->description = $request->description;
        $library->number_of_books = $request->number_of_books;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move('uploads/libraries', $image->getClientOriginalName());
            $library->image = $request->file('image')->getClientOriginalName();
        }
        $library->save();
        return redirect()->route('libraries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Library $library)
    {
        //
        return view('libraries.show', compact('library'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Library $library)
    {
        //
        return view('libraries.edit', compact('library'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Library $library)
    {
        //
        $library->name = $request->name;
        $library->description = $request->description;
        $library->number_of_books = $request->number_of_books;
        if ($request->hasFile('image')) {
            $old_image = $library->image;
            $image = $request->file('image');
            unlink(public_path('uploads/libraries/' . $old_image));
            $image->move('uploads/libraries', $image->getClientOriginalName());
            $library->image = $request->file('image')->getClientOriginalName();
        }
        $library->update();
        return redirect()->route('libraries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Library $library)
    {
        //
        $old_image = $library->image;
        unlink(public_path('uploads/libraries/' . $old_image));
        $library->delete();
        return redirect()->route('libraries.index');
    }
}
