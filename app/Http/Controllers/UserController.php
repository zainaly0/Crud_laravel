<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function form(){
        return view('add');
    }

    public function show(){
        $datas = User::get();
        return view('show', compact('datas'));
    }

    public function add(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('show');
    }

    public function edit($id){
        $user = User::find($id);
        return view('edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        return redirect()->route('show');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('show');

    }
}
