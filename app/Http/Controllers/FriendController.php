<?php

namespace App\Http\Controllers;

use App\Models\friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{

    // function for index
    public function index()
    {
        $friends = friend::all();

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
        // return $request->all();

        $AllFriends = $request->validate([
            'name' => 'required|string|max:60',
            'address' => 'required|string|max:60',
            'mobile' => 'required|string|max:60',
            'email' => 'required|string|max:60',
            'blood_group' => 'nullable|string|max:60',
        ]);

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
            'email' => 'required|string|max:60',
            'blood_group' => 'nullable|string|max:60',
        ]);
        $friends->update($AllFriends);

        return redirect()->route('friend.index')->withSuccess('data updated successfully');

    }

    // function for delete
    public function destroy($id){
        $friends =friend::findOrFail($id);

        $friends->delete();
        return redirect()->back()->withSuccess('data deleted');

    }
}
