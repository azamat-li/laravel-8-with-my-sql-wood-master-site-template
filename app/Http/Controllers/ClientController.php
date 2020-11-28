<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Client;

class ClientController extends Controller
{

    /**
     * To display a listing of the resource.
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

    /**
     * To show the form for creating a new resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('clients.create',['tags'=> Tag::all()]);
    }


    /**
     * To store a newly created resource in storage.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
         request()->validate([
            'name' => 'required',
            'about' => 'required',
        ]);

        Client::create([
                'name' => request('name'),
                'about' => request('about'),
                'slug' => request('name')
        ]);

        return redirect('/clients');
    }

    /**
     * To display specified resource.
     * @param Client $client
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Client $client){
        return view('clients.show', [ 'client' => $client ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     * @param Client $client
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * To update  specified resource.
     * @param Client $client
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Client $client)
    {
         request()->validate([
            'name' => 'required',
            'about' => 'required',
        ]);

        $client->update([
                'name' => request('name'),
                'about' => request('about'),
                'slug' => request('name')
        ]);

        return redirect('/clients/'.$client->id);
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
