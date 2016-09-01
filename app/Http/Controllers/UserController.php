<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
function index()
{
    $users =User::all();
   return view('users.list',['users'=>$users]);
}
function create()
{
    return view('users.create');
}
function store(Request $request)
{


    User::create($request->all() );
    return redirect('users');
}
function edit(user $user)
{
   // $user =User::find($id);
    return view ('users.edit',['user'=> $user]);

}
function update(request $request,$id)
{
 $user=user::find( $id);
    $user->update($request->all());
    return redirect()->route('userlist');
}
}
