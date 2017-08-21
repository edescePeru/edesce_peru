<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send( Request $request )
     {
         //dd($request->name);
         if( $request->get('name') == "" )
             return response()->json(['error'=>true,'message'=>'Ingrese el nombre del remitente.']);
         if( $request->get('email') == "" )
             return response()->json(['error'=>true,'message'=>'Ingrese el correo del remitente.']);
         if( $request->get('subject') == "" )
             return response()->json(['error'=>true,'message'=>'Ingrese el asunto del mensaje.']);
         if( $request->get('mensaje') == "")
             return response()->json(['error'=>true,'message'=>'Ingrese el mensaje de contacto.']);

         Mail::send('emails.contact', $request->all(), function ($msj){
             $msj->subject('Correo de contacto');
             $msj->to('edesceperu@gmail.com');
         });

         return response()->json(['error'=>false,'message'=>'Correo enviado correctamente']);

     }
}
