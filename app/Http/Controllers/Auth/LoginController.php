<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Monolog\Handler\StubNewRelicHandlerWithoutExtension;


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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login( Request $request )
    {
        $user = User::where('email', $request->get('email'))->get();
        if ( isset($user[0]) ){
            if ( $user[0]->email == $request->get('email') AND $user[0]->login == 0 ){
                //dd('Esta apto para loguearse');
                // Iniciamos session
                //dd(Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]));
                if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
                    $user[0]->login = 1;
                    $user[0]->save();
                    return redirect('home');
                }

            } else {
                //dd('Ya ha iniciado sesion.');
                return redirect('/')->withErrors(array('message' => 'Esta cuenta ha iniciado sesión en otro lugar. !!'));
            }
        }
        return redirect('login')->withErrors(array('message' => 'Credenciales incorrectas. !!'));
    }

    public function logout( Request $request )
    {
        $user = Auth::user();
        //dd($user);
        $user->login = 0;
        $user->save();
        Auth::logout();
        return redirect('/');
        //'logout');
    }




}
