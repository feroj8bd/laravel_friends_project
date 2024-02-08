<?php

namespace App\Http\Controllers;

use App\Models\friend;
use App\Models\Gift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gifts =Gift::with('friend')->get();

       return view('gifts.index', compact('gifts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $friends = friend::all();
        $gifts = Gift::all();
        return view('gifts.create', compact('friends','gifts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        $AllGifts = $request->validate([
            'name' => 'required',
            'gift_type' => 'nullable|string|max:50',
            'gift_date' => 'required|date|max:50',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        // image upload
        if ($request->hasFile('image')) {
           $imagePath = $request->File('image')->store('img', 'public');
           $AllGifts['image'] =  $imagePath;
        }
   
        Gift::create($AllGifts);

        return redirect()->back()->withSuccess('data save done');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gifts =Gift::findOrFail($id);
        return view('gifts.show', compact('gifts'));
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
    public function destroy($id){
        $gifts =Gift::findOrFail($id);

        // image delete
        if ($gifts->image) {
            Storage::disk('public')->delete($gifts->image );
        }

        $gifts->delete();
        return redirect()->back()->withSuccess('data deleted');

    }
}
