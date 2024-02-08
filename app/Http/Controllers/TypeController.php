<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::with('gift')->get();
        return view('types.index', compact('types'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request->all();

        $data = $request->validate([
            'type_id' => 'required',
            'gift_type' => 'required|string|max:40',
            'gift_size' => 'nullable|string|max:40',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        Type::create($data);
        return redirect()->back()->withSuccess('type has been save successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
