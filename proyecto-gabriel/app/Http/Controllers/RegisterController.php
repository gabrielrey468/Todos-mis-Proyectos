<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {   
      
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'phone'=>'string',
            'country'=>'string',
            'role'=>'string',
            'surname'=>'string'
        ]);

       /*  $user = User::create(request(['name', 'surname', 'email', 'password', 'phone', 'country','role'])); */
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->role = 'ROLE_USER';
        $user->surname = $request->surname;
        $user->save();
        auth()->login($user);
        return redirect()->to('/');
    }

    protected function validator(array $data)
    {
        return User::create([
            'role' => 'user',
            'name' => $data['name'],
            'surname' => $data['surname'],
            'nick' => $data['nick'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

}
