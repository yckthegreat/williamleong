<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {

        return view('home');
    }

    public function theFirm() {

        return view('the_firm');
    }

    public function people() {

        return view('people');
    }

    public function profile() {

        return view('profile');
    }

    public function practiceArea() {

        return view('practice_area');
    }

    public function article() {

        return view('article');
    }

    public function articles() {

        return view('articles');
    }

    public function contact() {

        return view('contact');
    }
}
