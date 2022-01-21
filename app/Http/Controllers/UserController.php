<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Authenticatable;

class UserController extends Controller
{
    public function getlogin(Request $request ){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','password'],
        ]);
        if (Auth::guard('web')->attempt($credentials)){
          return redirect()->route('dasboard');
        }
        else{
         return view('dangnhap.login');
        }
       
    } 
    public function dasboard(){
        return redirect()->route('loaddacsan');
    }
    public function logout(){
        Auth::guard('users')->logout();
        return view('dangnhap.login');
   }
}
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
       
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Users  $users
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Users $users)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Users  $users
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Users $users)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Users  $users
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Users $users)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Users  $users
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Users $users)
//     {
//         //
//     }
// }
