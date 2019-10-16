<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        
        return view('users.show',[
            'user' => $user
        ]);
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        
        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $user->name = $request->name;
        $user->age = $request->age;
        $user->adress = $request->adress;
        $user->introduction = $request->introduction;
        
        $user->save();
        
        return redirect()->route('users.show', ['id' => $user->id]);
        
    }
    
}
