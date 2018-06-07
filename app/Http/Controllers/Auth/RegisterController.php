<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'adress' => 'required|string|min:4|max:255',
            'code_postal' => 'required|min:3',
            'ville' => 'required|string|min:4|max:255',
            'civilite' => 'required',
            'date_naissance' => 'required|min:4|max:255',
            'lieu_naissance' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'situation_familiale' => 'required',
            'cin' => 'required|unique:users',
            'type_cin' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'adress' => $data['adress'],
            'code_postal' => $data['code_postal'],
            'ville' => $data['ville'],
            'civilite' => $data['civilite'],
            'date_naissance' => $data['date_naissance'],
            'lieu_naissance' => $data['lieu_naissance'],
            'nationalite' => $data['nationalite'],
            'situation_familiale' => $data['situation_familiale'],
            'cin' => $data['cin'],
            'type_cin' => $data['type_cin'],
        ]);
    }
}
