<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtablissementController extends Controller
{
    public function show()
    {
        $schoolname = DB::table('settings')->where('NAME', 'schoolName')->value('VALUE');
        $schooltype = DB::table('settings')->where('NAME', 'schoolType')->value('VALUE');
        $typedim = DB::table('settings')->where('NAME', 'typeDim')->value('VALUE');
        $adresscity = DB::table('settings')->where('NAME', 'adressCity')->value('VALUE');
        $adresszip = DB::table('settings')->where('NAME', 'adressZip')->value('VALUE');
        $adressstate = DB::table('settings')->where('NAME', 'adressState')->value('VALUE');
        $adressdept = DB::table('settings')->where('NAME', 'adressDept')->value('VALUE');
        $adress = DB::table('settings')->where('NAME', 'adressStreet')->value('VALUE');
        $codeuai = DB::table('settings')->where('NAME', 'codeUai')->value('VALUE');
        $license = DB::table('settings')->where('NAME', 'licenseKey')->value('VALUE');

        $licenseState = $this->verifyKey($license);

        return view('direction.settings.etab.etablissement', [
            'page_name' => 'Paramètres globaux',
            'schoolname' => $schoolname,
            'schooltype' => $schooltype,
            'typedim' => $typedim,
            'adresscity' => $adresscity,
            'adresszip' => $adresszip,
            'adressstate' => $adressstate,
            'adressdept' => $adressdept,
            'adress' => $adress,
            'codeuai' => $codeuai,
            'license' => $license,
            'licenseState' => $licenseState,
        ]);
    }

    private function verifyKey($key)
    {
        $end = 1;

        return $end;
    }

    public function save(Request $request)
    {
        $schooltype = DB::table('settings')->where('NAME', 'schoolType')->value('VALUE');
        if ($request->get('etab-type') != $schooltype) {
            DB::table('settings')->where('NAME', 'schoolType')->update(['VALUE' => $request->get('etab-type')]);
        }

        $schoolname = DB::table('settings')->where('NAME', 'schoolName')->value('VALUE');
        if ($request->get('etab-name') != $schoolname) {
            DB::table('settings')->where('NAME', 'schoolName')->update(['VALUE' => $request->get('etab-name')]);
        }

        $typedim = DB::table('settings')->where('NAME', 'typeDim')->value('VALUE');
        if ($request->get('etab-dim') != $typedim) {
            DB::table('settings')->where('NAME', 'typeDim')->update(['VALUE' => $request->get('etab-dim')]);
        }

        $adresscity = DB::table('settings')->where('NAME', 'adressCity')->value('VALUE');
        if ($request->get('city') != $adresscity) {
            DB::table('settings')->where('NAME', 'adressCity')->update(['VALUE' => $request->get('city')]);
        }

        $adresszip = DB::table('settings')->where('NAME', 'adressZip')->value('VALUE');
        if ($request->get('zip') != $adresszip) {
            DB::table('settings')->where('NAME', 'adressZip')->update(['VALUE' => $request->get('zip')]);
        }

        $adressState = DB::table('settings')->where('NAME', 'adressState')->value('VALUE');
        if ($request->get('state') != $adressState) {
            if ($request->get('state') == 'null') {
                $adressState = null;
            } else {
                $adressState = $request->get('state');
            }
            DB::table('settings')->where('NAME', 'adressState')->update(['VALUE' => $adressState]);
        }

        $adressDept = DB::table('settings')->where('NAME', 'adressDept')->value('VALUE');
        if ($request->get('dep') != $adressDept) {
            if ($request->get('dep') == 'null') {
                $adressDept = null;
            } else {
                $adressDept = $request->get('dep');
            }
            DB::table('settings')->where('NAME', 'adressDept')->update(['VALUE' => $adressDept]);
        }

        $adress = DB::table('settings')->where('NAME', 'adressStreet')->value('VALUE');
        if ($request->get('adress') != $adress) {
            DB::table('settings')->where('NAME', 'adressStreet')->update(['VALUE' => $request->get('adress')]);
        }

        $codeuai = DB::table('settings')->where('NAME', 'codeUai')->value('VALUE');
        if ($request->get('uai') != $codeuai) {
            DB::table('settings')->where('NAME', 'codeUai')->update(['VALUE' => $request->get('uai')]);
        }

        $license = DB::table('settings')->where('NAME', 'licenseKey')->value('VALUE');
        if ($request->get('license') != $license) {
            DB::table('settings')->where('NAME', 'licenseKey')->update(['VALUE' => $request->get('license')]);
        }

        return redirect()->back()->with("success", "Les paramètres sont correctement enregistrés !");
    }
}
