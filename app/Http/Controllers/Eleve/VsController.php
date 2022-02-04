<?php

namespace App\Http\Controllers\Eleve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ViescolaireController;

class VsController extends Controller
{
    private function renderAbsences($db)
    {
        $processed = [];
        foreach ($db as $absence) {
            // Date
            $dateD = $absence->d_date_absence_eleve;
            $timestampD = strtotime($dateD);
            $dayD = date('j', $timestampD);
            $monthD = ViescolaireController::translateDate($dateD, 'M');
            $hourD = date('H\hi', strtotime($absence->d_heure_absence_eleve));

            $dateF = $absence->a_date_absence_eleve;
            $timestampF = strtotime($dateF);
            $dayF = date('j', $timestampF);
            $monthF = ViescolaireController::translateDate($dateF, 'M');
            $hourF = date('H\hi', strtotime($absence->a_heure_absence_eleve));

            $dateD = "Du $dayD $monthD $hourD";
            $dateF = " au $dayF $monthF $hourF";

            $motif = ViescolaireController::displayAbsenceMotif($absence->motif_absence_eleve)['motif'];
            $acceptable = ViescolaireController::displayAbsenceMotif($absence->motif_absence_eleve)['acceptable'];

            $processed[] = [
                'date' => $dateD . $dateF,
                'missed' => '',
                'type' => $absence->type_absence_eleve,
                'ra' => $absence->ra,
                'reason' => [
                    'text' => $motif,
                    'hide' => false,
                    'acceptable' => $acceptable
                ],
                'justified' => $absence->justify_absence_eleve,
            ];
        }
        return $processed;
    }

    private function renderPunishments($db)
    {
        $processed = [];
        return $processed;
        foreach ($db as $punishment) {
            $date = $punishment->date_sanction;
            $timestamp = strtotime($date);
            $day = date('j', $timestamp);
            $month = ViescolaireController::translateDate($date, 'M');
            $hour = date('H\hi', strtotime($punishment->heure_sanction));

            $date = "Le $day $month $hour";
            $motif = ViescolaireController::displayAbsenceMotif($punishment->motif_absence_eleve)['motif'];

            $processed[] = [
                'date' => 'Le 1 jan. 1970',
                'lenght' => '- 1h',
                'type' => 3,
                'demand' => [
                    'when' => 'Le 1 jan. 1970',
                    'who' => 'Mme LARRAT D. (Professeur)',
                ],
                'reason' => [
                    'sys' => 'Sanction',
                    'explain' => 'Sanction',
                ],
                'work' => 'Ex 15p156',
            ];
        }
        // return $processed;
    }


    /**
     * Affichage des informations
     *
     *
     */
    public function index(Request $request, SituationController $situation)
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
        $punishments = $this->renderPunishments($absencesDB);

        return view('eleve.viescolaire', [
            'page_name' => 'Vie Scolaire',
            'absences' => $absences,
            'retards' => null,
            'events' => null,
            'punishments' => null,
            'absence_count' => $absencesCount,
            'retard_count' => $retardsCount,
            'total_heures' => $situation,
            'situation' => $situation
        ]);
    }
}
