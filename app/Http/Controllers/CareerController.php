<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Models\Career;
use App\Models\Tag;

class CareerController extends Controller
{

    public function show(Career $career)
    {
        return view('careers.show', ['career' => $career]);
    }

    public function main()
    {
        if (request('tag')) {
            $careers = Tag::where('name', request('tag'))->firstOrFail()->careers;
        } else {
            $careers = Career::all();
        }

        return view('careers.main', compact('careers'));
    }
}
