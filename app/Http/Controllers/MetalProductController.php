<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class MetalProductController extends Controller
{
    /**
     * Display requesting address number label page.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('metalproducts.index');
    }


    /**
     * Send email request of address label.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store()
    {
        request()->validate(['label' => 'required', 'selected_font_family' => 'required', 'is_bold' => 'required']);

//        $message = request('label');
//
//        Mail::raw($message, function ($message) {
//            $message->to('azamatalifullstack@gmail.com')
//                ->subject('Сообщение клиентов ИП Алибаев');
//        });
//
//        ddd($message);
//
//        return redirect('/metal_products')
//            ->with('message', 'Благодарим за сделанный заказ!');
    }

}
