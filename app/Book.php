<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','descripcion'];//para que solo aparezcan esos campos
}
