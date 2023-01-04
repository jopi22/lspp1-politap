<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'min:9', 'unique:users'],
            'email2' => ['required', 'unique:users'],
            'jurusan_id' => ['required'],
            'role' => ['required'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'email2' => $data['email2'],
            'jurusan_id' => $data['jurusan_id'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);

        $user->assignRole('user');
        return $user;
    }
}
