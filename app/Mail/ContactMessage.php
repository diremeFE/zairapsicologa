<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Mail\ShouldQueue; // opcional si usas colas

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
{
    $subject   = '📩 Nuevo mensaje desde la web - Zaira Psicología';
    $logoUrl   = asset('storage/images/logo.svg'); // pon tu logo en public/images/logo-email.png
    $submitted = now()->timezone('Europe/Madrid')->format('d/m/Y H:i');

    return $this->from(config('mail.from.address'), 'Zaira Psicología')
                ->replyTo($this->data['email'], $this->data['name'])
                ->subject($subject)
                ->view('emails.contact-pro')     // ⬅️ NUEVA plantilla pro
                ->text('emails.contact-text')    // versión texto plano
                ->with([
                    'logoUrl'    => $logoUrl,
                    'submittedAt'=> $submitted,
                    'preheader'  => 'Has recibido un nuevo mensaje desde el formulario de contacto.',
                ]);
}


}
