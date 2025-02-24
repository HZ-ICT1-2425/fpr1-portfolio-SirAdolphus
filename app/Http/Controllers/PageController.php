<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function profile() {
        return view('profile');
    }

    public function dashboard() {
        return view('dashboard');
    }

    public function blog() {
        return view('blog');
    }

    public function faq() {
        return view('faq');
    }
}
