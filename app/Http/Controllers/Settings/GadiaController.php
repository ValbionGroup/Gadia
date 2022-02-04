<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GadiaController extends Controller
{
    public function show()
    {
        $license = DB::table('settings')->where('NAME', 'licenseKey')->value('VALUE');

        return view('direction.settings.gadia.gadia', [
            'license' => $license,
            'licenseState' => $this->verifyKey($license),
        ]);
    }

    private function verifyKey($key)
    {
        $end = -1;

        return $end;
    }
}
