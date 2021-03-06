<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function category($id)
    {
        $category = App\Category::all();
        return view('category', compact('category'));
    }
}
