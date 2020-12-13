<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Tag;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;


class ClientController extends Controller
{

    /**
     * To display a listing of the clients.
     * @return Application|Factory|View
     */
    public function main()
    {
        if (request('Tag')) {
            $clients = Tag::where('name', request('client_only_tag'))->firstOrFail()->products;
        } else {
            $clients = Client::latest()->get();
        }
        return view('clients.main', ['clients' => $clients]);
    }

    /**
     * To show the form for creating a new client.
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('clients.create',['tags'=> Tag::all()]);
    }


    /**
     * To store newly created client.
     * @return Application|RedirectResponse|Redirector
     */
    public function store()
    {

        $this->validateClient();

        $client = Client::create([
            'name' => request('name'),
            'about' => request('about'),
        ]);

        if (request('tags')) {
            $client->tags()->attach(request('tags'));
        }

        return redirect('/clients');
    }

    /**
     * To display specified client.
     * @param Client $client
     * @return Application|Factory|View
     */
    public function show(Client $client){
        return view('clients.show', [ 'client' => $client ]) ;
    }

    /**
     * Show the form for editing the specified client.
     * @param Client $client
     * @return Application|Factory|View
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * To update specified client.
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
     * Remove the specified client from storage.
     * @param Client $client
     * @return Application|RedirectResponse|Redirector
     * @throws Exception
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('/clients');
    }

    /**
     *
     * Validating form data provided by view.
     */
    public function validateClient(): void
    {
        request()->validate([
            'name' => 'required',
            'about' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
