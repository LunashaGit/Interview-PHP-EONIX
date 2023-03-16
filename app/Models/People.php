<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class People extends Model
{
    use HasFactory;

    protected $fillable = ['uuid', 'name', 'last_name'];
    
    protected $attributes;

    function __construct()
    {
        $this->attributes = array('uuid' => Str::uuid());
    }

    public function scopeFilter($query, $filters)
    {
        $query->when($filters['name'] ?? false, fn ($query, $name) => $query->where(fn ($query) => $query->where('name', 'like', '%' . $name . '%')->orWhere('last_name', 'like', '%' . $name . '%')));
    }

}
