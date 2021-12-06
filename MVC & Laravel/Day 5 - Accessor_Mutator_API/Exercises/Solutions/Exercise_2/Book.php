<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function getPriceWithEuroAttribute()
    {
        return $this->attributes['price'] . '€';
    }

    public function getCreatedAtAttribute()
    {
        $timestamp = strtotime($this->attributes['created_at']);
        return date('d M Y', $timestamp);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
