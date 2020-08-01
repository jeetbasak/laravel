<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class Sendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $r)
    {
       // print_r($r->input());
        return $this->view('mail',['msg'=>$r->message])->to($r->to);  // $r a all input ache(to and msg ache)

        //mail page a akta array te msg parametter ar through dea $R->message niye jachhe
    }
}
