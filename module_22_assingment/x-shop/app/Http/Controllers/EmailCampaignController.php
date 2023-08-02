<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PromotionalEmail;
use Illuminate\Support\Facades\Mail;

class EmailCampaignController extends Controller
{
    public function sendPromotionalEmail()
    {
        // Logic to get the list of customers you want to send the email to
        $customers = \App\Models\Customer::all();

        // Loop through each customer and send the email
        foreach ($customers as $customer) {
            // You can pass any necessary data to the Mailable class if needed
            Mail::to($customer->email)->send(new PromotionalEmail());
        }

        // Success message or other logic after sending emails
        return redirect()->back()->with('success', 'Promotional emails sent successfully.');
    }
}
