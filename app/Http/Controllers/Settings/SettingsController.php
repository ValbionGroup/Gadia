<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function show()
    {
        return view('direction.settings.show', ['page_name' => 'Paramètres', 'evaluation' => true, 'infirmary' => true]);
    }
}
