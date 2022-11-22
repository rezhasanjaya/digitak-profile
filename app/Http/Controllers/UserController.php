<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index', [
            'title' => 'User Management',
            'users' => User::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('user.create', [
        //     'title' => 'New User',
        //     'users' => User::paginate(10)
        // ]);

        return redirect()->route('user.index')->with('message2', 'Select "New User" above if you want to add new user!');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $request)
    {
        $validatedData = $request->validate([
          'first_name' => 'required',
          'last_name' => 'required',
          'email' => 'required|email:dns|unique:users',
          'password' => 'required|min:10|max:255',
          'jurusan' => 'required',
          'tingkat' => 'required',
          'tanggal_masuk' => 'required',
          'tanggal_berakhir' => 'required',
          'durasi' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['email_verified_at'] = now();

        User::create($validatedData);
        return redirect()->route('user.index')->with('message', 'User added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', [
            'title' => 'Edit User',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, User $user)
    {
        if($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('user.index')->with('message', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('message', 'User deleted successfully!');
    }
}
