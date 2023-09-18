<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use Illuminate\Http\Request;
use App\Http\Controllers\EmailController;
class ContactoController extends Controller
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
    public function store(Request $request, Contacto $contacto)
    {
        $contacto->nome=$request->nome;
        $contacto->email=$request->email;
        $contacto->assunto=$request->assunto;
        $contacto->mensagem=$request->mensagem;
        if($contacto->save()){
           $email=new EmailController();
           $email->send("mmmm",$request->mensagem, $request->assunto, $request->email, $request->nome);
           $email->sendRetorno( $request->email,$request->nome);
        }
        return redirect()->back();
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(contacto $contacto)
    {
        //
    }
}
