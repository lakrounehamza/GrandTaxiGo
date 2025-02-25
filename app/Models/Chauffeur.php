<?php

namespace App\Models;
use  App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends User
{
    protected $fillable = ['disponiblite'];
}
