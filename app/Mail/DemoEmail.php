<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdfContent;
    public $pdfName;

    public function __construct($pdfContent, $pdfName)
    {
        $this->pdfContent = $pdfContent;
        $this->pdfName = $pdfName;
    }

    public function build()
    {
        return $this->view('emails.demo')
                    ->attachData($this->pdfContent, $this->pdfName, [
                        'mime' => 'application/pdf',
                    ]);
    }
}
