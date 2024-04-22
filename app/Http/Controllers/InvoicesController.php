<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function list(){
        return view('billings.invoices.list');
    }

    public function create(){
        return view('billings.invoices.create');
    }

    public function preview(){
        return view('billings.invoices.preview');
    }
}
