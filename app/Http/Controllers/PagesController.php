<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $tasks = [
            'go to the store',
            'learn laravel',
            'fuck these tutorials'
        ];
        return view('welcome', [
           'foo' => 'welcome',
            'tasks' => $tasks
        ]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
