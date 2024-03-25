<?php

namespace App\Http\OtherServices;

use App\Models\Settings;

class TaxBot
{
    public function taxStore($tax, $user_currency)
    {

        $settings = new Settings();
        $settings->tax = $tax;
        $settings->user_currency = $user_currency;
        $settings->save();

        return $settings->with('message', 'Settings set successfully');


    }
}
