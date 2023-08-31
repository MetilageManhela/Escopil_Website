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

    public function seguranca(){
        return view('pages.seguranca');
    }
    public function rd(){
        return view('pages.rd');
    }

    public function getaoProjecto(){
        return view('pages.gestao_projecto');
    }

    public function erpnext(){
        return view('pages.erpnext');
    }

    public function analiseSistemas(){
        return view('pages.analise_sistemas');
    }

    public function infraEstrutura(){
        return view('pages.infra_estrutura');
    }

    public function cism(){
        return view('trabalhos.cism');
    }
    public function autoridadeTributaria(){
        return view('trabalhos.autoridadeTributaria');
    }

    public function cmam(){
        return view('trabalhos.cmam');
    }

    public function inav(){
        return view('trabalhos.inav');
    }

    public function ministerio(){
        return view('trabalhos.ministerio');
    }

    public function revimo(){
        return view('trabalhos.revimo');
    }
    
    
}

