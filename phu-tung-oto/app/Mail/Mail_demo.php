<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Products;
use App\Models\image_features;
use App\Models\Orders;
use App\Models\Order_details;
use App\Models\User;

class Mail_demo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail Demo',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // view: 'mails.demo',
            view: 'mails.invoice'
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    function build()
    {
        $user_id = auth()->id();
        $cart = Order_details::whereHas('order', function ($query) use ($user_id) {
            $query->where('users_id', $user_id);
        })
            // $cart = Order_details::whereHas('order')
            ->with(['order.order_details', 'product.image_features'])
            ->get();

        $groupedCart = $cart->groupBy('product.id');
        $order_detail = Order_details::all();
        $order = Orders::all();
        $users = User::all();
        if ($groupedCart->isNotEmpty()) {

            $firstProduct = $groupedCart->first();
            $orderDetail = $firstProduct->first();
        }
        return $this->view('mails.invoice', compact("cart", "groupedCart", "order", "order_detail", "users"))
            ->from($orderDetail->order->users->email, 'Phụ tùng ô tô')
            ->subject('Thư xác nhận');
        // ->with([
        //     'title' => 'Chào bạn',
        //     'content' => 'Nội dung thông điệp'
        // ]);
    }
}
