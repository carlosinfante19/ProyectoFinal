<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class References extends Model
{
    protected $fillable = ['priority', 'url', 'image','filename'];
}
