<?php

namespace Bitfumes\Contact\Http\Controllers;


use App\Http\Controllers\Controller;
use Bitfumes\Contact\Mail\ContactMailable;
use Bitfumes\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 *
 * @author weirui
 * @date 2021-10-12
 */
class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
