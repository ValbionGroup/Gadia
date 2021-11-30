<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GadiaController extends Controller
{
    public function show()
    {
        return view('direction.settings.gadia.gadia');
    }
}
