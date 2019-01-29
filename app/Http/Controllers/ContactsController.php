<?php

    namespace App\Http\Controllers;

    use App\Contact;
    use Illuminate\Http\Request;

    class ContactsController extends Controller
    {
        //TODO terminar el crud solo hecho el listado de contactos
        public function index(Contact $contact)
        {
            $contacts = Contact::paginate(10);
            return view('admin.contacts.show',compact('contacts'));
        }


    }
