<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\EleveSituationController;
use App\Http\Controllers\EdtController;

class DashboardController extends Controller
{
    public function show(Request $request, EleveSituationController $situation, EdtController $edt_control)
    {
        $situation = $situation->is_regu($request->user()->login);
        $spacetype = "Élève";

        $edt = $edt_control->getTempsForOneDay($request->user()->login);
        $edtweek = $edt_control->getWeekName(date('W'));
        $moyenne = "16";
        $cdt = null;
        $marks = null;
        $tests = "6";
        $period = "Trimestre 1";
        $cta_info = ['0' => ['name' => 'Essai information', 'id' => '65125']];
        $cta_vs = "Essai vie scolaire";
        $cta_poll = ['0' => ['name' => 'Essai sondage', 'id' => '21645']];
        $cta_vote = ['0' => ['name' => 'Essai vote', 'id' => '816']];
        $cta_edt = $edt_control->getModifiedCourses($request->user()->login);

        if ($moyenne == null) {
            $moyenne = 'Aucune';
        }

        if ($tests == null) {
            $tests = 'Aucun';
        }

        return view('eleve.dashboard', [
            'page_name' => 'Tableau de bord',
            'spaceType' => $spacetype,
            'situation' => $situation,
            'edt' => $edt,
            'edtweek' => $edtweek,
            'moyenne' => $moyenne,
            'cdt' => $cdt,
            'marks' => $marks,
            'tests' => $tests,
            'period' => $period,
            'cta_vs' => $cta_vs,
            'cta_infos' => $cta_info,
            'cta_polls' => $cta_poll,
            'cta_votes' => $cta_vote,
            'cta_edt' => $cta_edt
        ]);
    }
}
