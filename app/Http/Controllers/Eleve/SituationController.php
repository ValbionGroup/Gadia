<?php

namespace App\Http\Controllers\Eleve;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SituationController extends Controller
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
        $absence = DB::table('absences_eleves')->where('eleve_absence_eleve', $eleve)->where('ra', 0)->get()->count();

        if ($absence != 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
