<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function create()
    {
        return view('front.card.create');
    }
}
