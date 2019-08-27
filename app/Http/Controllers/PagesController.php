<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio()
    {
        $categorias = App\Category::all();
        return view('categorias', compact('categorias'));
    }
}
