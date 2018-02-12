<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = ['name', 'email', 'tel', 'formation_id'];
}
