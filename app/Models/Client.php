<?php

    namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Client extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function path()
    {
        return "/clients/{$this->id}";
    }


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
