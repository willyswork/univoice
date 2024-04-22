<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view()
    {
       return view('products.view');
    }

    public function categories()
    {
        return view('products.categories.view');
    }


}
