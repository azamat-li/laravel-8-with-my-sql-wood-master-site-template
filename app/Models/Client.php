<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'about', 'slug'];

    public function path(){
        return route('clients.show', $this->id);
    }
    use HasFactory;

    public function boughtProducts(){
        //
    }
}
