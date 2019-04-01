<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Contact;

class PageController extends Controller
{
    protected $validatation = [
        'lname' => 'required|max:255',
        'fname' => 'required|max:255',
        'email' => 'required|email',
        'contact_number' => 'required|max:12|min:10',
        'message' => 'required'
    ];
    public function getHomePage() {
        return view("pages.home");
    }
    public function getAboutUsPage() {
        return view("pages.about_us");
    }
    public function getContactUsPage() {
        $contact = new Contact();
        return view("pages.contact_us",compact("contact"));
    }
    public function postContactUsPage(Request $request) {
        $request->validate($this->validatation);
        $contact = new Contact();
        $contact->fname =  $request->fname;
        $contact->lname =  $request->lname;
        $contact->email =  $request->email;
        $contact->contact_number =  $request->contact_number;
        $contact->message =  $request->message;
        $contact->created_at = $contact->updated_at = date("Y-m-d H:i:s");
        $contact->save();
        Session::flash('message', 'Your Message Sent. You will be contacted Soon.');
        return redirect()->route('page.home');
    }

}
