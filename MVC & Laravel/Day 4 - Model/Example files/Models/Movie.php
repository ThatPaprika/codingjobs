<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    /* Laravel/Eloquent expect :
        - the table name to be 'movies'
        - that you have a primary key named 'id'

    */
    /*
    protected $table = 'movie_table';
    protected $primaryKey = 'movie_id';*/
    // protected $timestamps = false;
}
