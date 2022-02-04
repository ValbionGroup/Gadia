<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Eleve\SituationController;
use App\Http\Controllers\EdtController;

class DashboardController extends Controller
{
    public function show(Request $request, SituationController $situation, EdtController $edt_control)
    {
        $situation = $situation->is_regu($request->user()->login);
        $spacetype = "Élève";

        $edt = $edt_control->getTempsForOneDay($request->user()->login);
        $edtweek = $edt_control->getWeekName(date('W'));
        $moyenne = null;
        $cdt = null;
        $marks = null;
        $tests = null;
        $period = null;
        $cta_info = null;
        $cta_vs = null;
        $cta_poll = null;
        $cta_vote = null;
        $cta_alert = false;
        $cta_edt = $edt_control->getModifiedCourses2d($request->user()->login);

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
            'cta_edt' => $cta_edt,
            'cta_alert' => $cta_alert
        ]);
    }
}
