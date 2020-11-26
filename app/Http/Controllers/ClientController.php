<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Client;
use App\Models\Tag;

class ClientController extends Controller
{
    /**
     * Shows exact client
     * @param Client $client
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Client $client){
        return view('clients.show', [ 'client' => $client ]) ;
    }

    /**
     * Shows all clients
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        if (request('Tag')) {
            $clients = Tag::where('name', request('client_only_tag'))->firstOrFail()->products;
        } else {
            $clients = Client::latest()->get();
        }
        return view('clients.index', ['clients' => $clients]);
    }
}
