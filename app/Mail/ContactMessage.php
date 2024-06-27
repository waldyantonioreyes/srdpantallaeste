<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use app\Http\Controllers\ContactController;

class ContactMessage extends Mailable
{

    public $data;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->data['email']) // Establece el remitente como la dirección proporcionada por el cliente
            ->subject($this->data['titulo'])
            ->view('emails.contacto')
            ->with('data', $this->data);
    }
}
