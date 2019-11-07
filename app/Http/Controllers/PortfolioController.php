<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $title = 'Наши работы';
        $type = ['image' => 'имиджевый', 'reklama' => 'рекламный'];
        $portfolio = Portfolio::all();
        return view('portfolio', compact('title', 'portfolio', 'type'));
    }
}
