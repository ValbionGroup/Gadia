<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViescolaireController extends Controller
{
    public static function translateDate($date, $format)
    {
        $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
        $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
        $english_dimmonths = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
        $french_dimmonths = array('janv.', 'févr.', 'mars', 'avril', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.');
        return str_replace($english_months, $french_months, str_replace($english_days, $french_days, str_replace($english_dimmonths, $french_dimmonths, date($format, strtotime($date)))));
    }

    public static function displayAbsenceMotif($id)
    {
        if ($id != null) {
            $motifs = DB::table('absence_motifs')->where('id_motif_absence', $id)->first();
            $motif = $motifs->def_motif_absence;
            $code = $motifs->init_motif_absence;
            return [
                'motif' => $motif,
                'code' => $code,
                'acceptable' => false
            ];
        } else {
            return [
                'motif' => 'Aucun motif fourni',
                'code' => 'ERR',
                'acceptable' => true
            ];
        }
    }
}
