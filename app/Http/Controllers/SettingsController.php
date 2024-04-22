<?php

namespace App\Http\Controllers;

use App\Http\OtherServices\TaxBot;
use App\Models\Banks;
use App\Models\Currency;
use App\Models\Settings;
use App\Models\Tax;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    public function profile() {
        return view('profile.view');
    }

    public function tax() {
        return view('settings.tax.view');
    }
    public function currency() {
        return view('settings.currency.view');
    }

    public function payment() {
        return view('settings.payment.view');
    }

    public function create()
    {


       /* $tax = Settings::with("taxes")->get();
        $currency = Settings::with("currencies")->get();
        $bank = Settings::with("banks")->get();
        $uuid = Auth::user()->uuid;
        $profile = User::where('uuid',$uuid)->get();






        return [$tax,$currency,$bank,$profile];*/
    }

    public function store(){


        /*  //Settings
          $settings = new Settings();
          $settings->name = "Willys Settings";
          $settings->uuid =Str::uuid();
          $settings->user_id ="1";
          $settings->save();

          // set profile information

         /* $name = "Willys Mwariri";
          $phonenumber = "0700200200";
          $email = "mwaririwillys@gmail.com";
          $country = "Kenya";
          // $user_image = "logo.png";

          $profile = new User();
          $profile->name = $name;
          $profile->email = $email;
          $profile->country = $country;
          $profile->phonenumber = $phonenumber;

          $profile->update();



          //set tax

          $tax = new Tax();
          $tax->tax_name = "VAT 16";
          $tax->tax_percentage = "16";
          $tax->settings_id ="1";
          $tax->uuid = Str::uuid();
          $tax->save();


          //set currency

          $currency = new Currency();
          $currency->currency_name = "USD";
          $currency->currency = "$";
          $currency->settings_id ="1";
          $currency->uuid = Str::uuid();
          $currency->save();

          //Banks Accounts settings

         $bank = new Banks();
          $bank->bank_name = "Kenya Commercial Bank";
          $bank->bank_owner = "Willys Mwariri";
          $bank->bank_account = "12567389292";
          $bank->bank_country = "Kenya";
          $bank->bank_address = "Nairobi Westlands";
          $bank->bank_postal = "204";
          $bank->settings_id ="1";
          $bank->uuid = Str::uuid();
          $bank->save();


           $message = 'All settings set available';



          return [$settings,$tax,$currency,$bank, $message];*/

    }
}
