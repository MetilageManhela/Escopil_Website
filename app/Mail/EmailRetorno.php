<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailRetorno extends Mailable
{
    use Queueable, SerializesModels;

    public $recipient;
    public $messagem;
    public $nome;
    public function __construct($recipient, $messagem, $nome)
    {
        $this->recipient = $recipient;
        $this->messagem = $messagem;
        $this->nome = $nome;
    }

    public function build()
    {
        // return $this->view('view.name');
        return $this->subject("Retorno Escopil Tecnologia")
                    ->view('emails.email_retorno');



    }
}
