<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function taxes()
    {
        return $this->hasMany(Tax::class);
    }
    public function currencies()
    {
        return $this->hasMany(Currency::class);
    }
    public function banks()
    {
        return $this->hasMany(Banks::class);
    }
}
