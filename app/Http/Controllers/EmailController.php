<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Exception;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        try {
            Mail::to('auliarasyidalzahrawi@gmail.com')->send(new ContactFormMail($data));
            return redirect('/#contact')->with('success', 'Your message has been sent, wait for my response.');
        } catch (Exception) {
            return redirect('/#contact')->with('error', 'Something went wrong, please try again.');
        }
    }
}
