<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Accessor;

use App\role;


class EloquentController extends Controller
{
  public function index(){

    // this will give you user detailes 
    /*$users = User::find(1);
    return $users;*/

    //but this one is it wiil give you paasport detailes 
 /* $users = User::find(1)->passport;
   // return $users;

    return view('welcome',compact('users'));
*/

//one to many
$users = User::find(1)->mobile;


return view('welcome',compact('users'));


  }
  public function manytomany(){

$roles = User::find(2)->roles;
$user = role::find(1)->user;
return $user;


return view('welcome',compact('users'));


  }



 
    public function dd(){

      $data = [
 
        'name' =>'ram',
        'email' =>'anitha1111111@gmail.com',
        'password'  => 'anitha',
        
        
    ];
    Accessor::create($data);
    
      $user = Accessor::all();
      // delete 
      // update 
      
      return $user;

    }
   

}
