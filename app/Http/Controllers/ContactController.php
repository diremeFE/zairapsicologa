<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required','string','max:120'],
            'email'   => ['required','email','max:190'],
            'phone'   => ['nullable','string','max:40'],
            'subject' => ['nullable','string','max:190'],
            'message' => ['required','string','max:5000'],
            // Honeypot opcional (añádelo en el form): 'company' => ['nullable','size:0']
        ]);

        // Destinatario fijo: tu correo
        $to = config('mail.to_address', 'zairapsicologiaa@gmail.com');

        // Envía el correo
        Mail::to($to)->send(new ContactMessage($data));

        return back()->with('status', '¡Gracias! He recibido tu mensaje y te responderé en breve.');
    }
}
