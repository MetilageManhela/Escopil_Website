<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EnvioEmails;
use App\Mail\EmailRetorno;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send( $recipient,$messagem, $assunto, $email, $nome)

    {
        $recipients = ['metilahilario@gmail.com'];

        foreach ($recipients as $recipient) {
            $messagem= 'Your custom message for ' . $recipient;
            Mail::to($recipient)->send(new EnvioEmails( $recipient,$messagem, $assunto, $email, $nome));
        }
       return "Emails sent successfully!";
    }

    
    public function sendRetorno($recipient,$nome)

         {
            $messagem= "Meus cumprimentos, ".$nome." recebemos o email, em breve entraremos em contacto...";
            Mail::to($recipient)->send(new EmailRetorno( $recipient,$messagem,$nome));
        }

    }

