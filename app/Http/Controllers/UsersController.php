<?php

namespace App\Http\Controllers;

use App\Models\My_users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
       ]);

       $newMy_users = my_users::create($data);

       return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(My_users $my_users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(My_users $my_users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, My_users $my_users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(My_users $my_users)
    {
        //
    }
}
