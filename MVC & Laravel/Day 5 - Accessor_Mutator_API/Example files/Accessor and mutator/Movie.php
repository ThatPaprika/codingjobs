<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Accessor : getter
    public function getTitleAttribute()
    {
        return strtoupper($this->attributes['title']);
    }

    /*public function getTitleAttribute($title)
    {
        return strtoupper($title);
    }*/

    // Mutator : setter
    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = strtolower($title);
    }
}
