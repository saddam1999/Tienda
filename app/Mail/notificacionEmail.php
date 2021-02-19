<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use \App\Models\Settings;
use \App\Models\Equipo;

class notificacionEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $equipo;
    public $setting;

    /**
     * The order instance.
     *
     * @var Equipo
     * @var Settings
     */
    public function __construct(Equipo $equipo,Settings $setting)
    {
        $this->equipo = $equipo;
        $this->setting = $setting;

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
