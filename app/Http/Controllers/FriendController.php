<?php

namespace App\Http\Controllers;

use App\Models\friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FriendController extends Controller
{

    // function for index
    public function index()
    {
        $friends = friend::orderBy('id', 'DESC')->paginate(4);


        return view('friends.index', compact('friends'));
    }

    //function for create
    public function create()
    {
        return view('friends.create');
    }

    // function for store
    public function store(Request $request)
    {
        // return dd(request()->all());

        $AllFriends = $request->validate([
            'name' => 'required|string|max:60',
            'address' => 'required|string|max:60',
            'mobile' => 'required|string|max:60',
            'date_of_birth' => 'required|date|max:60',
            'email' => 'required|string|max:60',
            'blood_group' => 'nullable|string|max:60',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:1024',
        ]);

        // image upload
        if ($request->hasFile('image_url')) {
           $imagePath = $request->File('image_url')->store('img', 'public');
           $AllFriends['image_url']= $imagePath;
        }

        friend::create($AllFriends);
        return redirect()->back()->withSuccess('data save done');
    }

    // function for show
    public function show($id)
    {
        // return 'hi';
        $friends =friend::findOrFail($id);
        return view('friends.show', compact('friends'));

    }

    // function for edit
    public function edit($id){
        $friends =friend::findOrFail($id);
        return view('friends.edit', compact('friends'));
    }

    // function for update
    public function update(Request $request, $id){
        $friends =friend::findOrFail($id);


        $AllFriends = $request->validate([
            'name' => 'required|string|max:60',
            'address' => 'required|string|max:60',
            'mobile' => 'required|string|max:60',
            'date_of_birth' => 'required|date|max:60',
            'email' => 'required|string|max:60',
            'blood_group' => 'nullable|string|max:60',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:1024',

        ]);

        // image update
        if ($request->hasFile('image_url')) {

            if ($friends->image_url) {
                Storage::disk('public')->delete($friends->image_url);
            }
            $imagePath = $request->file('image_url')->store('img', 'public');
            $AllFriends['image_url'] =$imagePath;
        }

        $friends->update($AllFriends);

        return redirect()->route('friend.index')->withSuccess('data updated successfully');

    }

    public function destroy($id){
        $friends =friend::findOrFail($id);

            // image delete
            if ($friends->image_url) {
                Storage::disk('public')->delete($friends->image_url );
            }

        $friends->delete();
        return redirect()->back()->withSuccess('data deleted');

    }
}