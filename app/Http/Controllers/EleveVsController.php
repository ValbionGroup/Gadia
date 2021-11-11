<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Controllers\EleveSituationController;

class EleveVsController extends Controller
{
    public static function dateToFrench($date, $format)
    {
        $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
        $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
        $english_dimmonths = array('jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec');
        $french_dimmonths = array('janv.', 'févr.', 'mars', 'avril', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.');
        return str_replace($english_months, $french_months, str_replace($english_days, $french_days, str_replace($english_dimmonths, $french_dimmonths, date($format, strtotime($date)))));
    }

    private function renderAbsences($db)
    {
        foreach ($db as $absence) {
            // Date
            $dateD = $absence->d_date_absence_eleve;
            $timestamp = strtotime($dateD);
            $dayD = date('j', $timestamp);
            $monthD = $this->dateToFrench($dateD, 'F');

            $dateD = "Du $dayD $monthD";

            $processed[] = array($dateD);
            return $processed;
        }
    }


    /**
     * Affichage des informations
     *
     *
     */
    public function index(Request $request, EleveSituationController $situation)
    {
        $absencesDB = DB::table('absences_eleves')->where('eleve_absence_eleve', $request->user()->login)->get();

        $absencesCount = $absencesDB->count();
        if ($absencesCount == 0) {
            $absencesCount = 'Aucune';
        }

        $retardsCount = $absencesDB->count();
        if ($retardsCount == 0) {
            $retardsCount = 'Aucun';
        }

        $situation = $situation->is_regu($request->user()->login);

        $absences = $this->renderAbsences($absencesDB);

        return view('eleve.viescolaire', [
            'page_name' => 'Vie Scolaire',
            'absences' => $absences,
            'absence_count' => $absencesCount,
            'retard_count' => $retardsCount,
            'total_heures' => $situation,
            'situation' => $situation
        ]);
    }
}
