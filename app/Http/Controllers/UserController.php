<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class UserController extends Controller
{
    public function index()
    {
            $users = User::all();
            return view('admin.adminHome',['users'=>$users]);
        }
    

        public function create(){
            return view('admin.adcreate');
        }

        public function store(Request $request){
            $data = $request->validate([
                'name'=> 'required',
                'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password'=>'required',
                'phonenumber'=> 'required|numeric',
                'type'=> 'nullable',
            ]);
            $newUser = User::create($data);
            return redirect(route('admin.adminHome'))->with('success','User Created Successfully');
        }
        public function edit(User $user){
            return view('admin.adedit',['user'=>$user]);
        }
        public function update(User $user, Request $request){
            $data = $request->validate([
                'name'=> 'required',
                'email'=> '',
                'password'=>'',
                'phonenumber'=> 'numeric',
                'type'=> 'nullable',
            ]);
            $user->update($data);
            return redirect(route('admin.adminHome'))->with('success','Customer Updated Successfully');
        }
        public function delete(User $user){
            $user->delete();
            return redirect(route('admin.adminHome'))->with('success','Customer Deleted Successfully');
        }
    }
    