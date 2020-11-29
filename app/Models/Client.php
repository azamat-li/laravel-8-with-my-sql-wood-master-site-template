<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


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
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function boughtProducts()
    {
        //
    }
}
