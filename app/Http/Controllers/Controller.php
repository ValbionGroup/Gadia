<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $schoolname = DB::table('settings')->where('NAME', 'schoolName')->value('VALUE');
        $typedim = DB::table('settings')->where('NAME', 'typeDim')->value('VALUE');

        view()->share([
            'etabName' => $schoolname,
            'etabType' => $typedim
        ]);
    }
}
