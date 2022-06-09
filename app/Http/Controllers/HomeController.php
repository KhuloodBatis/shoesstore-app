<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function __invoke()
    {
       // $categories = Category::get();
       // return view('home', ['categories' =>  $categories]);
       $categories = Category::whereNull('parent_id')->with('children')->get();
        return view('home', ['categories' =>  $categories]);

    }
}
