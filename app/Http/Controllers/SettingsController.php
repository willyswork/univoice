<?php

namespace App\Http\Controllers;

use App\Http\OtherServices\TaxBot;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function profile()
    {

        // profile information to update

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
        // $message = 'settings available';



        return $settings;
    }
}
