<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titles extends Model
{
    protected $fillable = ['title', 'content', 'icon'];
}
