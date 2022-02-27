<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use App\Models\users;

class userController extends Controller
{

    public function save(Request $request ){
        $users = new users;
        $users -> name = $request->name ; 
        $users -> email = $request->email ;
        $users -> password = $request->password ;
     
        $users->save();
        //return 'user added';
        return view('welcome');
    }

    public function get(){
        $users = users::all();
        return  $users;
    }

    public function show(){
        
        echo('this is show echo');
    }


    public function update($id)
    {
        $user = users::find($id);
        if ($user) {
            
            $user -> name = $request->name ; 
            $user -> email = $request->email ;
            $user -> password = $request->password ;
     
            $user->update();
            return 'user updated';
        }
        else{
            return 'user did not found';
        }
    }

    public function delete($id){
        $user = users::find($id);
        if ($user) {
            $user->delete();
            return 'user deleted';
        }
        else{
            return 'user did not found';
        }

    }
}
