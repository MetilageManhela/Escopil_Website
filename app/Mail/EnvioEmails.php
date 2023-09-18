<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnvioEmails extends Mailable
{
    use Queueable, SerializesModels;

    public $recipient;
    public $messagem;
    public $assunto;
    public $email;
    public $nome;
    public function __construct($recipient, $messagem, $assunto, $email, $nome)
    {
        $this->recipient = $recipient;
        $this->messagem = $messagem;
        $this->assunto = $assunto;
        $this->email = $email;
        $this->nome = $nome;
    }

    public function build()
    {
        // return $this->view('view.name');
        return $this->subject($this->assunto)
                    ->view('emails.email_template');



    }
}
