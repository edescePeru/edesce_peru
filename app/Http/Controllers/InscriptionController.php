<?php

namespace App\Http\Controllers;

use App\Inscription;
use App\InscriptionDetail;
use App\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
        $code    = $request->get('code');

        $code_unique = Inscription::where('code',$code)->first();
        if( count($code_unique) != 0 )
            return response()->json(['error'=>true,'message'=>'Ya existe una inscripción con este código.']);

        if( $modality == '0' )
            return response()->json(['error'=>true,'message'=>'Es necesario escoger una modalidad.']);

        if( $subject == '0' )
            return response()->json(['error'=>true,'message'=>'Es necesario escoger un curso.']);

        if( $code == "" )
            return response()->json(['error'=>true,'message'=>'Es necesario ingresar el código de inscripción.']);

        DB::beginTransaction();
        try {
            $inscription = Inscription::create([
                'user_id' => $id,
                'modality' => $modality,
                'code' => $code
            ]);

            $inscriptions = Inscription::where('user_id', $id)->get();
            foreach ($inscriptions as $inscription){
                $inscription_details = InscriptionDetail::where('inscription_id', $inscription->id)->get();
                foreach ($inscription_details as $inscription_detail){
                    if ($inscription_detail->subject_id == $subject){
                        DB::rollBack();
                        throw new \Exception('El alumno ya esta inscrito en dicho curso.');
                    }
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
        $inscriptions = Inscription::with('users')->with('details')->get();
        $array = [];
        $k=0;
        foreach ($inscriptions as $inscription) {
            $array[$k]['inscription_id'] = $inscription->id;
            $array[$k]['inscription_code'] = $inscription->code;
            $array[$k]['student'] = $inscription->users->name . " " . $inscription->users->surname;
            $array[$k]['student_code'] = $inscription->users->code;
            $array[$k]['subject_id'] = $inscription->details[0]->subject_id;
            $subject = Subject::find($inscription->details[0]->subject_id);
            $array[$k]['subject'] = $subject->name . " " . $subject->level;
            $array[$k]['date'] = $inscription->created_at;
            $array[$k]['inscription_modality'] = $inscription->modality;
            $array[$k]['score'] = $inscription->details[0]->score;
            $k++;
        }
        //dd($array);
        return view('inscription.show')->with(compact('array'));
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
    public function delete(Request $request)
    {
        if( Auth()->user()->role_id != 1 )
            return redirect('/');

        $id    = $request->get('id');
        $subject  = $request->get('id_subject');

        $inscription_detail = InscriptionDetail::where('inscription_id', $id)->where('subject_id', $subject)->first();
        $inscription_detail->delete();
        $inscription = Inscription::find($id);
        $inscription->delete();
        return response()->json(['error'=>false,'message'=>'Inscription eliminada correctamente']);
    }

    public function showProfile($code)
    {
        $inscriptions = Inscription::where('code', $code)->with('users')->with('details')->get();
        $array = [];
        $k=0;
        foreach ($inscriptions as $inscription) {
            $array[$k]['inscription_id'] = $inscription->id;
            $array[$k]['inscription_code'] = $inscription->code;
            $array[$k]['student'] = $inscription->users->name . " " . $inscription->users->surname;
            $array[$k]['student_code'] = $inscription->users->code;
            $array[$k]['subject_id'] = $inscription->details[0]->subject_id;
            $subject = Subject::find($inscription->details[0]->subject_id);
            $array[$k]['subject'] = $subject->name . " " . $subject->level;
            $array[$k]['date'] = $inscription->created_at->format('Y-m-d');
            $array[$k]['inscription_modality'] = $inscription->modality;
            $array[$k]['score'] = $inscription->details[0]->score;
            $k++;
        }
        //dd($array);
        return $array;
    }

    public function score(Request $request){
        if( Auth()->user()->role_id != 1 )
            return redirect('/');

        $id    = $request->get('id');
        $score  = $request->get('score');
        $subject  = $request->get('id_subject');
        //dd($request);

        if( $score == "" || $score < 0 || $score > 20 )
            return response()->json(['error'=>true,'message'=>'Ingrese un valor númerico entre 0 y 20.']);

        $inscriptionDetail = InscriptionDetail::where('inscription_id', $id)->where('subject_id', $subject)->first();
        /*$inscriptionDetail_id =  $inscriptionDetail->id;
        $inscription = InscriptionDetail::find($inscriptionDetail_id);*/
        $inscriptionDetail->score = $score;

        $inscriptionDetail->save();
        return response()->json(['error'=>false,'message'=>'Calificación modificada correctamente']);

    }

    public function pdf(Request $request){
        if( Auth()->user()->role_id != 1 )
            return redirect('/');

        $id    = $request->get('id');
        $file_pdf    = $request->file('file_pdf');
        $subject  = $request->get('id_subject');

        $inscriptionDetail = InscriptionDetail::where('inscription_id', $id)->where('subject_id', $subject)->first();

        // Si el detalle ya tiene un pdf asociado se debe eliminar y reemplazar por el que viene
        
        if (!$request->hasFile('file_pdf'))
            return response()->json(['error'=>true,'message'=>'Ocurrió un error al subir la imagen.']);

        $path = public_path().'/assets/storage';
        $extension = $file_pdf->getClientOriginalExtension();
        $fileName = $file_pdf->getClientOriginalName();
        $file_pdf->move($path, $fileName);
        $inscriptionDetail->file_pdf = $fileName;
        $inscriptionDetail->save();

        return response()->json(['error'=>false,'message'=>'Pdf subido correctamente']);

    }
}
