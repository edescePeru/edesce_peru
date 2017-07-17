<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::where('role_id', 2)->get();
        //dd($speakers);
        return view('student.index')->with(compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request )
    {
        if( Auth()->user()->role_id != 1 )
            return redirect('/');

        $name     = $request->get('name');
        $surname  = $request->get('surname');
        $email    = $request->get('email');
        $password = $request->get('password');
        $code     = $request->get('code');
        $country  = $request->get('country');
        $city     = $request->get('city');
        $mobile   = $request->get('mobile');
        $dni      = $request->get('dni');

        $email_unique = User::where('email',$email)->first();
        $code_unique = User::where('code',$code)->first();

        if( count($email_unique) != 0 )
            return response()->json(['error'=>true,'message'=>'Ya existe un alumno con esta cuenta de email']);

        if( $email == "" || $password = "")
            return response()->json(['error'=>true,'message'=>'Falta las credenciales de inicio de sesión.']);
        
        if( count($code_unique) != 0 )
            return response()->json(['error'=>true,'message'=>'Ya existe un alumno con este código']);

        $student = User::create([
            'name'=>$name,
            'surname'=>$surname,
            'email'=>$email,
            'password'=>bcrypt($password),
            'code'=>$code,
            'country'=>$country,
            'city'=>$city,
            'mobile'=>$mobile,
            'dni'=>$dni,
            'login'=>0,
            'role_id'=>2
        ]);

        /*$path = public_path().'/assets/images';
        $extension = $image->getClientOriginalExtension();
        $fileName = $speaker->id . '.' . $extension;
        $image->move($path, $fileName);

        $speaker->image = $fileName;*/
        $student->save();

        return response()->json(['error'=>false,'message'=>'Alumno registrado correctamente']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
