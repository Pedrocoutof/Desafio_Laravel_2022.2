<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('site.lista-usuarios')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $user = User::findOrFail($request->get('id'));
        return view('site.user-show')->with('user', $user);
    }

    public function edit(Request $request)
    {
        $user = User::findOrFail($request->get('id'));
        return view('site.editar-user')->with('user', $user);
    }


    public function update(Request $request)
    {
        $user = User::findOrFail($request->get('id'));

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->permission = $request->input('permission');
        $user->fidelity = $request->input('fidelity');

        $user->save();

        return redirect ('/users/');
    }


    public function delete(Request $request)
    {
        echo ('Test');
        User::findOrFail($request->get('id'))->delete();
        return redirect('/users/');
    }
}
