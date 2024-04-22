<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptsController extends Controller
{
    public function list(){
        return view('billings.receipts.list');
    }

    public function create(){
        return view('billings.receipts.create');
    }

    public function preview(){
        return view('billings.receipts.preview');
    }
}
