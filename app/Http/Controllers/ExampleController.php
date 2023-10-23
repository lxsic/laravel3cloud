<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request('trashed')=='yes'){
            $test= Test::withTrashed()->get();
        }else{
            $test= Test::get();
        }
        return view('example.index',compact('test'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('example.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string',
            'content'=>'string',
            'status2'=>'required|in:enable,disable',
            'show'=>'required|in:1,0',
        ],['name'=>'The Title field must be filled','content'=>'The description field must be string'],
        ['status2'=>'Required','show'=>'Required',]);
        Test::create($data);
        return redirect('/example');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $test = Test::find($id);
        return view('example.show',compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $test = Test::find($id);
        return view('example.edit',compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'name'=>'max:16|alpha|required',
            'content'=>'alpha_num',
            'status2'=>'required|in:enable,disable',
            'show'=>'required|in:1,0',
        ],['name'=>'The field must be from 1-16'],
    ['status2'=>'Required','show'=>'Required',]);
        Test::where('id',$id)->update($data);
        return redirect('/example');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Test::destroy($id);
        return redirect('/example');
    }
    public function forceDelete(string $id)
    {
        Test::where('id',$id)->forceDelete();
        return redirect('/example');
    }
    public function restore(string $id)
    {
        Test::where('id',$id)->restore();
        return redirect('/example');
    }
}
