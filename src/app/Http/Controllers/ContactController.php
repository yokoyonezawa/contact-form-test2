<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Users;

class ContactController extends Controller
{
    public function index() {
        return view ('index');
    }

    public function confirm(ContactRequest $request){

        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'no-1', 'no-2', 'no-3', 'address', 'building', 'select', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request){
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'no-1', 'no-2', 'no-3', 'address', 'building', 'select', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }

    public function login(){
        return view ('login');
    }

    public function register(){
        return view ('register');
    }

    public function admin(){
        return view ('admin');
    }
}
