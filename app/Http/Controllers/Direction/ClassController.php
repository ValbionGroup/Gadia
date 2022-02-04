<?php

namespace App\Http\Controllers\Direction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        return view('direction.classes.show');
    }
}
