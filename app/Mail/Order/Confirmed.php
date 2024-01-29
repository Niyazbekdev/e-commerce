<?php

namespace App\Mail\Order;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Confirmed extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Order $order
    )
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('ecommercefurniq@gmail.com', 'furniq'),
            subject: 'Order created',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.order.confirmed.blade.php',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
