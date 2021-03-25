<?php

namespace App\Mail;

use App\Models\Email_subject;
use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;


    public $request;
    public $subjectName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->subjectName = Email_subject::find($request->email_subject_id);
        $this->request = $request;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->request->mail)->subject($this->subjectName->subject)->view('mail')->with(['request' => $this->request, 'subjectName' => $this->subjectName]);
    }
}
