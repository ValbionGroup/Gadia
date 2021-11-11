<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EdtController extends Controller
{
    /**
     * Retourne le nom de la semaine (A, B, etc...) en fonction des paramètre de Gadia et du numéro de semaine fourni.
     *
     * @param int $num
     * @return string
     */
    public function getWeekName($num)
    {
        if ($num%2 != 0) {
            if (date('H') > 19 && date('N') == 7) {
                return 'B';
            } else {
                return 'A';
            }
        } else {
            if (date('H') > 19 && date('N') == 7) {
                return 'A';
            } else {
                return 'B';
            }
        }
    }

    /**
     * Retourne une liste avec les cours de la journée en cours, ou du lendemain si il est 19h passé.
     *
     * @param string $eleve
     * @return array
     */
    public function getTempsForOneDay($eleve)
    {
        // $edt = DB::table('absences_eleves')->where('eleve_absence_eleve', $eleve)->where('ra', NULL)->get()->count();

        if (date('H') < 19) {
            $day = date('N');
        } else {
            $day = date('N')+1;
        }
        $edt = null;

        return $edt;
    }

    /**
     * Récupère la liste des cours modifiés pour deux jours
     *
     * @param string $eleve
     * @return array
     */
    public function getModifiedCourses($eleve)
    {
        return null;
    }
}
