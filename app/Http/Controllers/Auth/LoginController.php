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
        //dd(Hash::make( $request->get('password') ) );
        //dd($request->get('password'));
        //Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);
        $user = User::where('email', $request->get('email'))->get();
        //dd($user[0]->login);
        if ( $user[0]->email == $request->get('email') AND $user[0]->login == 0 ){
            //dd('Esta apto para loguearse');
            $user[0]->login = 1;
            $user[0]->save();
            // Iniciamos session
            Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);
            return redirect('home');
        } else {
            //dd('Ya ha iniciado sesion.');
            return redirect('/');
        }
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
