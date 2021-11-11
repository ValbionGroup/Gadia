<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EleveSituationController extends Controller
{
    /**
     * Retourne un boolen en fonction de si la situation de vie scolaire d'un élève est régulière ou non
     * 1 = irrégulière /// 0 = régulière
     *
     * @param string $eleve
     * @return bool
     */
    public function is_regu($eleve)
    {
        $absence = DB::table('absences_eleves')->where('eleve_absence_eleve', $eleve)->where('ra', null)->get()->count();

        if ($absence != 0) {
            return '1';
        } else {
            return '0';
        }
    }
}
