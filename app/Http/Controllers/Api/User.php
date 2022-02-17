<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User as UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate(['name'=>'required','email'=>'required','password'=>'required','user_type'=>'required',]);
        $_ = new UserModel();$_->name = $request->name;$_->email = $request->email;if($request->user_type == "admin"){$_->user_type = 1;}$_->password = Hash::make($request->password);$_->save();return response('Successfully Added ', 200)->header('Content-Type', 'text/plain');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!UserModel::find($id)){
            return response('Not Found', 205)
            ->header('Content-Type', 'text/plain'); 
        }
        $user = UserModel::destroy($id);
        return response('success ', 200)
        ->header('Content-Type', 'text/plain');
    }
}
