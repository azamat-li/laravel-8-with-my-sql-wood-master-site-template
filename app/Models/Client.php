<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Client extends Model
{
    protected $fillable = ['name', 'about', 'slug'];

    public function path()
    {
        return route('clients.show', $this->id);
    }

    use HasFactory;

    /**
     * Tags of client
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function boughtProducts()
    {
        //
    }
}
