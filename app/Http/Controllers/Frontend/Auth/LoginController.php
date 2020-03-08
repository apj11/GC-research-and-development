<?php

namespace App\Http\Controllers\Frontend\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('guest:web')->except('logout');
    }
    public  function  showLoginForm()
    {
        return view('frontend.index');
    }
    public function auth(){

        $this->guard('web');
    }
    public function login(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
//    dd($request->all());
        if ($credentials = $request->only('email', 'password')) {
            if (Auth::guard('web')->attempt($credentials)) {
                return redirect()->route('index')->with('success', 'You are Logged in');

            }

            return Redirect::to("contacts")->with('info', ' Loggin Failled');

        }
    }


    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()
            ->route('index')
            ->with('success','Admin has been logged out!');
    }
}
