<?php

namespace App\Http\Controllers;

use App\Http\OtherServices\TaxBot;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function create()
    {
        $tax = '16';
        $user_currency = 'USD';

        $settings = new Settings();
        $settings->tax = $tax;
        $settings->user_currency = $user_currency;
        $settings->save();
        // $message = 'settings available';



        return $settings;
    }
}
