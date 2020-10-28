<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        return view('profiles.index', compact('user', 'follows'));
    }

    public function edit(User $user){

        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function users(){
        $users = User::all();

        return view('users', compact('users'));
    }

    public function update (User $user){

        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => ''
        ]);

        if(request('image')){
            $imagePath = (request('image')->store('upload', 'public'));

            $imageArray = ['image' => $imagePath];
        }


        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("profile/{$user->id}");
    }
}
