<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactRequested;

class PageController extends Controller
{
    public function __invoke()
    {
        // ...
    }

    public function home()
    {
        return view('home');
    }

    public function designs()
    {
        return view('designs');
    }

    public function websites()
    {
        return view('websites');
    }

    public function noelements()
    {
        return view('noelements');
    }

    public function contact()
    {
        return view('contact');
    }

    public function puzzle()
    {
        return view('puzzle');
    }

    public function winnaar()
    {
        return view('winnaar');
    }

    public function postContact(ContactRequest $request)
    {
        $mailable = new ContactRequested($request->only('name', 'email', 'message'));
        $mail = \Mail::to(env('MAIL_FROM_ADDRESS'));
        if($request->has('email_copy')) $mail->cc($request->get('email'));
        $mail->send($mailable);

        return redirect()->back()->with('success', 'Email has been send succesfully');
    }
}
