<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;


class PagesController extends Controller
{
    public function home()
    {
        $users = User::all();
        return view('pages.home', compact('users'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('pages.blog', compact('blogs'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
