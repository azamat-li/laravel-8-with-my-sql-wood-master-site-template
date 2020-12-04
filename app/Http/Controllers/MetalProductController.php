<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MetalProductController extends Controller
{
    /**
     * Display requesting address number label page
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('metalproducts.index');
    }


    /**
     * Submit address number label.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

}
