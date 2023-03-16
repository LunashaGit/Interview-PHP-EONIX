<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class People extends Model
{
    use HasFactory;

    protected $attributes;

    function __construct()
    {
        $this->attributes = array('id' => Str::uuid());
    }
}
