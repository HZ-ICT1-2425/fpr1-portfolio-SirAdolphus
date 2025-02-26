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

    // TODO: Remove it
    public function blog() {
        return view('posts.index');
    }

    public function faq() {
        return view('faq');
    }
}
