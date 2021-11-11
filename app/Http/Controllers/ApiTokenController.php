<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ApiTokenController extends Controller
{
    /**
     * Show the user API token screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('common.api.index', [
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
}
