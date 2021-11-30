<?php

namespace App\Http\Controllers\Direction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        return view('direction.dashboard', ['page_name' => 'Tableau de bord', 'spaceType' => 'Direction', 'situation' => '0']);
    }
}
