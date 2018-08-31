<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\EmailVerification as EmailVerification;
use Mail;

class SendVerificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $users;
 
    public function __construct($users)
    {
     $this->users = $users;
     
    }

    
    public function handle()
    {
        $email = new EmailVerification($this->user);
        Mail::to($this->user->email)->send($email);
    }
}
