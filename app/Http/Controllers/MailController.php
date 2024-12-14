<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendWebReadyPlan(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
    ]);

    try {
        // Письмо в поддержку
        Mail::send('emails.support', ['data' => $validated], function ($message) use ($validated) {
            $message->from($validated['email'], $validated['name'])
                    ->to('services@webreadyplan.com') // Новый email-адрес
                    ->subject('Web-Ready Plan Submission');
        });

        // Письмо клиенту
        Mail::send('emails.confirmation', ['data' => $validated], function ($message) use ($validated) {
            $message->from('services@webreadyplan.com', 'Web-Ready Team') // Новый email-адрес
                    ->to($validated['email'])
                    ->subject('Your Web-Ready Plan Request');
        });

        return response()->json(['success' => true], 200);
    } catch (\Exception $e) {
        \Log::error('Error sending email: ' . $e->getMessage());
        return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
    }
}
}
