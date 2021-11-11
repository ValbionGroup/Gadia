<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FriendshipController extends Controller
{
    public function index(Request $request)
    {
        return view('eleve.friends', [
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
}
