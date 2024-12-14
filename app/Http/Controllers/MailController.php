<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class MailController extends Controller
{


public function sendWebReadyPlan(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'g-recaptcha-response' => 'required', // reCAPTCHA response token
    ]);

    // Проверка reCAPTCHA
    $recaptchaSecret = '6Lc635sqAAAAAIvvC1ljuK3NF8XXJ-vH_1QRnKpe'; // Ваш секретный ключ
    $recaptchaResponse = $request->input('g-recaptcha-response');

    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse,
    ]);

    $responseData = $response->json();

    if (!$responseData['success'] || $responseData['score'] < 0.5) {
        return response()->json(['success' => false, 'message' => 'reCAPTCHA verification failed.'], 422);
    }

    // Отправка email
    try {
        Mail::send('emails.support', ['data' => $validated], function ($message) use ($validated) {
            $message->from($validated['email'], $validated['name'])
                    ->to('services@webreadyplan.com')
                    ->subject('Web-Ready Plan Submission');
        });

        Mail::send('emails.confirmation', ['data' => $validated], function ($message) use ($validated) {
            $message->from('services@webreadyplan.com', 'Web-Ready Team')
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
