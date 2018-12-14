<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels; 
use Illuminate\Contracts\Queue\ShouldQueue;
use CorreoInstalacion;
use Request;

class Instalacion_Mail extends Mailable
{
    public $emergencyCall;

    /*
    public function __construct(CorreoInstalacion $datos)
    {
        $this->emergencyCall = $emergencyCall;
    }
    */

    public function build(Request $request)
    {
        return $this->view('mails.instalacion');
        //redirect()->route();
    }
}

