<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;

class ClientController extends Controller
{
    public function show(Client $client){
//        $client = DB::table('clients')->where('slug', $slug)->first();
        return view('clients.show', [ 'client' => $client ]) ;
    }

    public function index(){
        $clients  = DB::table('clients')->latest()->take(6)->get();
        return view('clients.index', ['clients' => $clients]);
    }
}
