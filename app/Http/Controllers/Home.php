<?php

namespace App\Http\Controllers;

class Home extends Controller
{
    public function index()
    {
        $title = ['pagetitle' => 'Counselling & Services'];
        echo view('header', ['title' => $title]);
        echo view('home' );
        echo view('footer');
    }

    public function charitable_foundations()
    {
        $title = ['pagetitle' => 'Charitable Foundations'];
        echo view('header', ['title' => $title]);
        echo view('charitable_foundations' );
        echo view('footer');
    }
}