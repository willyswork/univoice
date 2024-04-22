<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function invoices(){
        return view('reports.invoices.view');
    }
    public function receipts(){
        return view('reports.receipts.view');
    }
    public function quotations(){
        return view('reports.quotations.view');
    }
}
