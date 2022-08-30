<?php

namespace App\Mail;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use phpDocumentor\Reflection\Types\Integer;

class ProductCreated extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct( public Product $produto )
    {

    }

    public function build()
    {
        return $this->markdown('email.produto-criado');
    }
}
