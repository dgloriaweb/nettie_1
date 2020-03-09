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
}