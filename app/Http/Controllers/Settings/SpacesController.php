<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpacesController extends Controller
{
    public function show()
    {
        $lock_eleve = DB::table('space_lock')->where('space', 'eleve')->value('disabled');
        $lock_parent = DB::table('space_lock')->where('space', 'parent')->value('disabled');
        $lock_prof = DB::table('space_lock')->where('space', 'prof')->value('disabled');
        $lock_viescolaire = DB::table('space_lock')->where('space', 'viescolaire')->value('disabled');

        return view('direction.settings.space', [
            'page_name' => 'Gestion des espaces et des connexions',
            'lock_eleve' => $lock_eleve,
            'lock_parent' => $lock_parent,
            'lock_prof' => $lock_prof,
            'lock_viescolaire' => $lock_viescolaire,
        ]);
    }

    public function spacelock(Request $request)
    {
        $lock_eleve = DB::table('space_lock')->where('space', 'eleve')->value('disabled');
        if ($lock_eleve == 0) {
            $lock_eleve = "on";
        } else {
            $lock_eleve = "off";
        }
        if ($request->get('eleve') != $lock_eleve) {
            if ($request->get('eleve') == "on") {
                $lock_eleve = 0;
            } else {
                $lock_eleve = 1;
            }
            DB::table('space_lock')->where('space', 'eleve')->update(['disabled' => $lock_eleve]);
        }

        $lock_parent = DB::table('space_lock')->where('space', 'parent')->value('disabled');
        if ($lock_parent == 0) {
            $lock_parent = "on";
        } else {
            $lock_parent = "off";
        }
        if ($request->get('parent') != $lock_parent) {
            if ($request->get('parent') == "on") {
                $lock_parent = 0;
            } else {
                $lock_parent = 1;
            }
            DB::table('space_lock')->where('space', 'parent')->update(['disabled' => $lock_parent]);
        }

        $lock_prof = DB::table('space_lock')->where('space', 'prof')->value('disabled');
        if ($lock_prof == 0) {
            $lock_prof = "on";
        } else {
            $lock_prof = "off";
        }
        if ($request->get('prof') != $lock_prof) {
            if ($request->get('prof') == "on") {
                $lock_prof = 0;
            } else {
                $lock_prof = 1;
            }
            DB::table('space_lock')->where('space', 'prof')->update(['disabled' => $lock_prof]);
        }

        $lock_viescolaire = DB::table('space_lock')->where('space', 'viescolaire')->value('disabled');
        if ($lock_viescolaire == 0) {
            $lock_viescolaire = "on";
        } else {
            $lock_viescolaire = "off";
        }
        if ($request->get('viescolaire') != $lock_viescolaire) {
            if ($request->get('viescolaire') == "on") {
                $lock_viescolaire = 0;
            } else {
                $lock_viescolaire = 1;
            }
            DB::table('space_lock')->where('space', 'viescolaire')->update(['disabled' => $lock_viescolaire]);
        }

        return redirect()->back()->with("success", "Les autorisations d'accès sont correctement enregistrées !");
    }

    public function cas(Request $request)
    {
    }
}
