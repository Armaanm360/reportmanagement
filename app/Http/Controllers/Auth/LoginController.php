<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected $username = 'user_id';


    public function loginNameOrEmail(Request $request)
    {
        $field = filter_var($request->input('user_id'), FILTER_VALIDATE_EMAIL) ? 'user_id' : 'username';

        $request->merge([$field => $request->input('user_id')]);

        $this->username = $field;

        return $this->login($request);

    }


    public function username()
    {
        return $this->username;
    }

}
