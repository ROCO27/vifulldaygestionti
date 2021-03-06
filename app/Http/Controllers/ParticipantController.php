<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function addparticipant (Request $request){
        $names = $request->names;
        $email = $request->email;
        $phone =  $request->phone;
        $organization = $request->organization;
        $is_certificate = $request->is_certificate ?? false;


        $infoParcticipant = Participant::select('email')
                        ->where('email',$email)
                        ->where('phone',$phone)
                        ->first();

        if ($infoParcticipant == null) {
            $confirmation_code = Str::random(25);
            $participant = Participant::create([
                "name"=> $names,
                "email" => $email,
                'phone' => $phone,
                'organization' => $organization,
                'confirmation_code' => $confirmation_code,
                "IS_DELETE" => 0,
                "IS_CERTIFICATE" => $is_certificate,
            ]);

            // Send confirmation code
            Mail::send('emails.confirmation_code', ["confirmation_code"=>$confirmation_code,'names' => $names], function($message) use ($request) {
                $message->to($request->email, $request->names)->subject('Por favor confirma tu correo');
            });

            return response()->json(["error"=>false,'message' => "Registro Exitoso"], 200);

            //return view('confirmemailsuccess', compact(credentials));
        }else{
            return response()->json(["error"=>true,'message' => "Datos invalidos"], 200);
        }


    }

    public function changeOptionCerticate (Request $request){
        $idParticipan = $request->idParticipant;
        // $is_certificate = $request->is_certificate ?? false;


        $infoParcticipant = Participant::where('id_participant',$idParticipan)
                        ->first();

        if ($infoParcticipant->IS_CERTIFICATE == 1) {
            $valorCertificate = 0;
        }else{
            $valorCertificate = 1;
        }

        $infoParcticipant->IS_CERTIFICATE =  $valorCertificate;
        $infoParcticipant->save();
        return response()->json(["error"=>false,'message' => "Operación Exitosa"], 200);
    }

    public function deleteParticipant (Request $request){
        $idParticipan = $request->idParticipant;
        // $is_certificate = $request->is_certificate ?? false;


        $infoParcticipant = Participant::where('id_participant',$idParticipan)
                        ->first();

        $infoParcticipant->IS_DELETE =  1;
        $infoParcticipant->save();
        return response()->json(["error"=>false,'message' => "Operación Exitosa"], 200);
    }

    public function verify($code)
    {
        $participant = Participant::where('confirmation_code', $code)->first();

        if (! $participant)
            return redirect('/');

        $participant->confirmed = true;
        $participant->confirmation_code = null;
        $participant->save();

        return redirect('/confirmemailsuccess');
    }


    public function listparticipantes(){
        return view('listParticipants');
    }

    public function indexSorteo(){
        return view('sorteoParticipants');
    }

    public function getparticipant(){
        $infoParcticipant = Participant::where('IS_DELETE',0)
                            ->get();
        return response()->json(["error"=>false,'infoParcticipant' => $infoParcticipant], 200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        //
    }

}
