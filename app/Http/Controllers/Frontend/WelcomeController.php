<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $special = Category::where('name', 'special')->first();
        // dd($special);
        return view('welcome', compact('special'));
    }
}
