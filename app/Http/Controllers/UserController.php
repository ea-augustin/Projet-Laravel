<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('users')->insert(
            ['name' => $request->input('name'), 'email' => $request->input('email'), 'password' => $request->input('password')]
            );
        
        return view('pages.connexion');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function read($id)
    {      
        return User::find($id);    
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
        $user = User::find($id);
        
        if($request->name) $user->name = $request->name;
        if($request->password) $user->password = $request->password;
        if($request->email) $user->email = $request->email;
        
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        
        $user->delete();
        
        return view('pages.accueil');
    }
    
    public function connection(){
        $user = User::where('name','');
        
        return $user;
        
        
    }
}
