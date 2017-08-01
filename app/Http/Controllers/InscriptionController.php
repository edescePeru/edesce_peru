<?php

namespace App\Http\Controllers;

use App\Inscription;
use App\InscriptionDetail;
use App\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::where('role_id', 2)->get();
        $subjects = Subject::all();
        //dd($speakers);
        return view('inscription.index')->with(compact('students', 'subjects'));
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

        $id     = $request->get('id');
        $name  = $request->get('name');
        $date    = $request->get('date');
        $modality = $request->get('modality');
        $subject  = $request->get('subject');

        if( $modality == '0' )
            return response()->json(['error'=>true,'message'=>'Es necesario escoger una modalidad.']);

        if( $subject == '0' )
            return response()->json(['error'=>true,'message'=>'Es necesario escoger un curso.']);

        DB::beginTransaction();
        try {
            $inscription = Inscription::create([
                'user_id' => $id,
                'modality' => $modality
            ]);

            $inscriptions = Inscription::where('user_id', $id)->get();
            foreach ($inscriptions as $inscription){
                $inscription_details = InscriptionDetail::where('inscription_id', $inscription->id)->get();
                foreach ($inscription_details as $inscription_detail){
                    if ($inscription_detail->subject_id == $subject)
                        throw new \Exception('El alumno ya esta inscrito en dicho curso.');
                }
            }

            InscriptionDetail::create([
                'inscription_id' => $inscription->id,
                'subject_id' => $subject
            ]);
            DB::commit();
            return response()->json(['error' => false, 'message' => 'Inscripción realizada correctamente.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }

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
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
}
