<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;

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
        return response()->json(["data" => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => ["required","string",'max:255'],
            'username' => ["required","string",'max:255','unique:users,username'],
            'date_of_birth' => ["required","date"],
            'phone_number'=> ["required","string"],
            'email' => ["required","string",'unique:users,email'],
            'password' => ["required","string",'confirmed'],
        ];
        $validation = Validator::make($request->all(),$rules);
        if($validation->fails()){
            return response()->json($validation->errors(),422);
        }
        else{
            User::create($request->except(["password_confirmation"]));
            return response()->json(["msg"=>"user has been created"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return response()->json(["data" => $user]);
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
        
        $rules = [
            'name' => ["required","string",'max:255'],
            'username' => ["required","string",'max:255','unique:users,username,'.$id],
            'date_of_birth' => ["required","date"],
            'phone_number'=> ["required","string"],
            'email' => ["required","string",'unique:users,email,'.$id],
            'password' => ["string",'confirmed'],
        ];
        $validation = Validator::make($request->all(),$rules);
        if($validation->fails()){
            return response()->json($validation->errors(),422);
        }
        else{
            User::find($id)->update($request->except(["password_confirmation"]));
            return response()->json(["msg"=>"user has been updated"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(["msg"=>"user has been deleted"]);
    }

    public function login(Request $request){
        $rules = [
            'username' => ["required","string",'max:255'],
            'password' => ["required","string"],
        ];
        $validation = Validator::make($request->all(),$rules);
        if($validation->fails()){
            return response()->json($validation->errors(),422);
        }
        else{
            if(auth()->attempt(["username" => $request->get("username"),"password"=> $request->password])){
                return response()->json(["msg" => "you are logged in"]);
            }
            else{
                return response()->json(["msg" => "Credintial not correct"],422);
            }
        }
    }
}
