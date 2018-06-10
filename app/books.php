<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'title', 'category', 'summary','pdf', 'cover', 'user'
    ];
}
