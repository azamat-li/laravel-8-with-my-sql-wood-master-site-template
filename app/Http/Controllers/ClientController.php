<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ClientController extends Controller
{

    /**
     * To display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index()
    {
        if (request('Tag')) {
            $clients = Tag::where('name', request('client_only_tag'))->firstOrFail()->products;
        } else {
            $clients = Client::latest()->get();
        }
        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * To show the form for creating a new resource.
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('clients.create',['tags'=> Tag::all()]);
    }


    /**
     * To store a newly created resource in storage.
     * @return Application|RedirectResponse|Redirector
     */
    public function store()
    {

        request()->validate([
            'name' => 'required',
            'about' => 'required',
        ]);

        $client = Client::create([
            'name' => request('name'),
            'about' => request('about'),
        ]);

        $client->tags()->attach(request('tags'));

        return redirect('/clients');
    }

    /**
     * To display specified resource.
     * @param Client $client
     * @return Application|Factory|View
     */
    public function show(Client $client){
        return view('clients.show', [ 'client' => $client ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     * @param Client $client
     * @return Application|Factory|View
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * To update  specified resource.
     * @param Client $client
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Client $client)
    {
        $this->validateClient();

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
     * @param Client $client
     * @return Response
     */
    public function destroy(Client $client)
    {
        //
    }

    public function validateClient(): void
    {
        request()->validate([
            'name' => 'required',
            'about' => 'required',
            'slug' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
