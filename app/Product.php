<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description'];

    public function category()
    {
        return $this->hasOne('App\Category');
    }
}
