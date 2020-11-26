<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    /**
     * Tags belonging to product
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    /**
     * Manufacturer of product
     */
    public function manufacturer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}

