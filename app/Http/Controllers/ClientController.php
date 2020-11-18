<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $clients  = DB::table('clients')->latest()->get();
        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'about' => 'required',
        ]);

        $client = new Client();
        $client->name = request('name');
        $client->about = request('about');
        $client->slug = request('name');

        $client->save();

        return redirect('/clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($slug){
        $client = DB::table('clients')->where('slug', $slug)->first();
        return view('clients.show', [ 'client' => $client ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $client = DB::table('clients')->where('slug', $slug)->first();
        return view('clients.edit', compact('client'));
    }

    public function update($id)
    {
        request()->validate([
            'name' => 'required',
            'about' => 'required',
        ]);

        $client = \App\Models\Client::find($id);

        $client->name = request('name');
        $client->about = request('about');
        $client->save();
        return redirect('/clients/'.$client->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
