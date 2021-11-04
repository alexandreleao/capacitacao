<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index()
    {
        $tutoriais = collect([
            [
                'title' => 'Programação PHP',
                'image' => 'https://laravelnews.imgix.net/images/laravel8.jpg?ixlib=php-3.3.1'
            ],
            [
                'title' => 'PostgreSQL',
                'image' => 'https://laravelnews.imgix.net/images/laravel8.jpg?ixlib=php-3.3.1'
            ]
        ]);
        return view('pages.tutoriais', ['tutoriais' => $tutoriais]);
    }
}
