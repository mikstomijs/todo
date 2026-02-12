<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class diary extends Model
{
    protected $fillable = ["title", "body", "date"];
}
