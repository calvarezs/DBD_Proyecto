<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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

    public function viewUpdatePassword()
    {   
        $usuario = Auth::user(); 
        return view('Auth.passwords.reset', compact('usuario'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [ 
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function updatePassword(Request $data)
    {
        $usuario = Auth::user(); 
        $usuario->password = bcrypt($data->password); 
        $usuario->save();
        return redirect()->route('home');
    }
}
