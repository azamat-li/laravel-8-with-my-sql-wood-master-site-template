<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('feedback.index');
    }


    /**
     * Send email
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store()
    {
        request()->validate(['email' => 'required|email',
            'message' => 'required']);
//        $email = request('email');

        $message = request('message');

        Mail::raw($message, function ($message) {
            $message->to('azamatalifullstack@gmail.com')
                ->subject('Сообщение клиентов ИП Алибаев');
        });
        return redirect('/feedback')
            ->with('message', 'Благодарим за обратную связь!');
    }
}




