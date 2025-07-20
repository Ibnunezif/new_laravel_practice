<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table="product"; // to name the table name to be similar to the name in the database
    protected $fillable = ["name","description","size"]; // for mass assignment and to protect from malecious activity
}
