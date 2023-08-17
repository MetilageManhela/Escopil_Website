<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenteController extends Controller
{
    public function menu(){
        return view('layout.main');
    }

    public function contacto(){
        return view('content.contacto');
    }

    public function service(){
        return view('content.service');
    }

    public function blog(){
        return view('content.blog');
    }

    public function sobreNos(){
        return view('content.sobre_nos');
    }
}

