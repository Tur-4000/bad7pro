<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        $title = 'Услуги';
        return view('services', compact('title'));
    }
}
