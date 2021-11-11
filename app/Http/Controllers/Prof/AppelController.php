<?php

namespace App\Http\Controllers\Prof;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppelController extends Controller
{
    public function show()
    {
        return view('prof.appel', [
            'page_name' => "Faire l'appel"
        ]);
    }
}
