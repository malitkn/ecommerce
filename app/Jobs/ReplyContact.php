<?php

namespace App\Jobs;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ReplyContact implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var \App\Models\Contact
     */
    private Contact $contact;
    private $title;
    private $body;
    /**
     * @var \App\Models\User
     */
    private User $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Contact $contact, $title, $body, User $user)
    {
        $this->contact = $contact;
        $this->title = $title;
        $this->body = $body;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->contact)->send(new \App\Mail\ReplyContact($this->user, $this->contact, $this->title, $this->body));
    }
}
