<?php

namespace App\Http\Controllers;

use App\Http\OtherServices\TaxBot;
use App\Models\Banks;
use App\Models\Currency;
use App\Models\Settings;
use App\Models\Tax;
use App\Models\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function create()
    {

        // set profile information

        $name = "Willys Mwariri";
        $phonenumber = "0700200200";
        $email = "mwaririwillys@gmail.com";
        $country = "Kenya";
        // $user_image = "logo.png";

        $settings = new User();
        $settings->name = $name;
        $settings->email = $email;
        $settings->country = $country;
        $settings->phonenumber = $phonenumber;

        $settings->update();



        //set tax

        $tax = new Tax();
        $tax->tax_name = "VAT 16";
        $tax->tax_percentage = "16";
        $tax->save();


        //set currency

        $currency = new Currency();
        $currency->currency_name = "USD";
        $currency->currency = "$";
        $currency->save();

        //Banks Accounts settings

        $bank = new Banks();
        $bank->bank_name = "Kenya Commercial Bank";
        $bank->bank_account = "12567389292";
        $bank->bank_country = "Kenya";
        $bank->bank_address = "Nairobi Westlands";
        $bank->bank_postal = "204";
        $bank->save();


        // $message = 'settings available';



        return $settings;
    }
}
