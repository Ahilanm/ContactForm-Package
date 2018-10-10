<?php

namespace Package\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Package\Contact\Modals\Contact;
use Package\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        $input =  $request->except('_token','button');
        $result = Contact::create($input);
        if($result){
            Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->contactmessage, $request->contactemail, $request->contactname, $request->contactphone));
        }
        return redirect(route('contact'));
    }
}
