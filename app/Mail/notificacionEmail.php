<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use \App\Models\User;
use \App\Models\Equipo;

class notificacionEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $equipo;
    /**
     * The order instance.
     *
     * @var Equipo
     */
    public function __construct(Equipo $equipo)
    {
        $this->equipo = $equipo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.notificacionEmail');
    }
}
