<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        User::create($request->all()); 
        return redirect()->route('users.index')->with('success', 'User successfully created');
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all()); 
        return redirect()->route('users.index')->with('success', 'User successfully updated');
    }
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')->with('success', 'User successfully removed');
    }
}
