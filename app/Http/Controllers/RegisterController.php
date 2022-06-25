<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
      $ValidatedData = $request-> validate([
          'name' => ['required', 'max:100'],
          'username' => ['required','min:8', 'max:100'],
          'email' => ['required', 'email',],
          'password' => ['required', 'min:5','max:100']
       
      ]);
      $ValidatedData['password']=
      bcrypt($ValidatedData['password']);
      User::create($ValidatedData);

      $request->session()->flash('success', 'Registration successfull');

      return redirect('/login');
    }

   
}
