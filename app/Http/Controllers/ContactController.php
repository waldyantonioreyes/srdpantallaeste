<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use Dotenv\Validator;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|min:4',
            'titulo' => 'required|min:6',
            'mensaje' => 'required|min:10'
        ]);

        $messages = [
            'required' => 'The :attribute field is required.',
        ];
         
       
    
        $data = [
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'titulo' => $request->input('titulo'),
            'mensaje' => $request->input('mensaje'),
        ];
    
        Mail::to('sorteosrd@gmail.com')->send(new ContactMessage($data));
        $request->session()->flash('success', 'Mensaje enviado correctamente.');
        return back();
    }
}
