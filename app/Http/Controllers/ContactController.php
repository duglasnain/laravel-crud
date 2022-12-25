<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {
    public function submit(ContactRequest $request) {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Message added');
    }

    public function allMessages(){
        $contact = new Contact;
        return view('all-messages', ['data' => $contact->all()]);
    }

    public function oneMessage($id){
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }
    public function updateMessage($id){
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function submitUpdateMessage($id, ContactRequest $request){
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('one-message', $id)->with('success', 'Message updated');
    }
    public function deleteMessage($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('all-messages')->with('error', 'Message deleted');
    }
}
