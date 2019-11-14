<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $title = 'Наши работы';
        $type = ['image' => 'имиджевый', 'reklama' => 'рекламный'];
        $workType = '';
        $portfolio = Portfolio::where('published', 1)->get();
        return view('portfolio', compact('title', 'portfolio', 'type', 'workType'));
    }

    public function filter($workType) {
//        dd(__METHOD__, $type);
        $title = 'Наши работы';
        $type = ['image' => 'имиджевый', 'reklama' => 'рекламный'];
        $portfolio = Portfolio::where('published', 1)->where('type', '=', $workType)->get();
        return view('portfolio', compact('title', 'portfolio', 'type', 'workType'));
    }
}
