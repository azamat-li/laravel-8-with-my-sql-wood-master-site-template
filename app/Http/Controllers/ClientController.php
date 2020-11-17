<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\Client;

class ClientController extends Controller
{
    public function show($slug){
        $client = DB::table('clients')->where('slug', $slug)->first();
        return view('client', [ 'client' => $client ]) ;
    }

    public function index(){
        $clients  = DB::table('clients')->latest()->take(6)->get();
        return view('clients', ['clients' => $clients]);
    }
}
