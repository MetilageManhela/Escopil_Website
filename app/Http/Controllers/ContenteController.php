<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Http\Request;

class ContenteController extends Controller
{
    public function menu(){
        $blogs=blog::all();
        return view('layout.main', compact('blogs'));
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

    public function jsh(){
        return view('trabalhos.jsh');
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

    public function counterpart(){
        return view('trabalhos.counterpart');
    }
    
    public function stae(){
        return view('trabalhos.stae');
    }

    public function edm(){
        return view('trabalhos.edm');
    }

    public function mozaBanco(){
        return view('trabalhos.mozaBanco');
    }

    public function centralMedicamento(){
        return view('trabalhos.centralMedicamento');
    }
    
}

