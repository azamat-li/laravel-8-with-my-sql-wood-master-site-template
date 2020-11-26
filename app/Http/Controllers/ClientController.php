<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Client;

class ClientController extends Controller
{
    public function show(Client $client){
        return view('clients.show', [ 'client' => $client ]) ;
    }

    public function index(){
        if (request('Tag')) {
            $clients = Tag::where('name', request('client_only_tag'))->firstOrFail()->products;
        } else {
            $clients = Client::latest()->get();
        }
        return view('clients.index', ['clients' => $clients]);
    }
}
