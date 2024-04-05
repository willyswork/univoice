<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientsController extends Controller
{
    public function create()
    {
        $fullname = "Willys Mwariri";
        $email = "mwillys@gmail.com";
        $phonenumber = "0700400899";
        $address = "Nairobi";
        $user_id = "1";
        $uuid = Str::uuid();

        $client = new Clients();
        $client->name = $fullname;
        $client->email = $email;
        $client->phonenumber = $phonenumber;
        $client->address = $address;
        $client->users_id = $user_id;
        $client->uuid = $uuid;
        $client->save();

        return $client;
    }
}
