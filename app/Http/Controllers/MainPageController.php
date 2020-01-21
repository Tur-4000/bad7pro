<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index() {
        $title = 'Главная';
        $order = new Order();
        return view('index', compact('title', 'order'));
    }
}
