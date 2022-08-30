<?php

namespace App\Listeners;

use App\Mail\ProductCreated;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class NotifyEmail implements ShouldQueue
{
    public function __construct()
    {

    }

    public function handle(\App\Events\ProductCreated $event)
    {
        $allUsers = User::all();
        foreach ($allUsers as $index => $user){
            if($user->permission == 'administrator'){
                $email = new ProductCreated(
                    $event->produto,
                );
                $when = now()->addSeconds($index * 5);
                Mail::to($user)->later($when, $email);
            }
        }

    }
}
