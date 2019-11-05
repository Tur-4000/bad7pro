<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        $title = 'Наши контакты';
        $contacts = true;
        return view('contacts', compact('title', 'contacts'));
    }
}
