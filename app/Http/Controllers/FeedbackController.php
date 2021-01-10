<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
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
     * Display sending feedback view.
     *
     * @return Application|Factory|View|Response
     */
    public function main()
    {
        return view('feedback.main');
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

//        $message = request('message');

        Mail::to(\request('email'))
            ->send(new Feedback('изделия из дерева'));

        return redirect('/feedback')
            ->with('message', 'Благодарим за обратную связь!');
    }
}




