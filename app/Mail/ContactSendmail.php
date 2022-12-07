<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $cname;
    private $tel;
    private $emal;
    private $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct($inputs)
    {
        $this->name  = $inputs['name'];
        $this->cname  = $inputs['cname'];
        $this->company  = $inputs['company'];
        $this->email = $inputs['email'];
        $this->tel  = $inputs['tel'];
        $this->content = $inputs['content'];
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this
            ->subject('お問い合わせありがとうございます') // 件名
            ->view('emails.user_mail') // 本文
            ->with([
                'name' => $this->name,
                'cname' => $this->cname,
                'company' => $this->company,
                'email' => $this->email,
                'tel' => $this->tel,
                'content' => $this->content ? $this->content : null
            ]); // 本文に送る値

    }
}




?>
