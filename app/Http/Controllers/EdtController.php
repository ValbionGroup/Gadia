<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EdtController extends Controller
{
    /**
     * Returns the name of the week (A, B, etc...) according to the Gadia parameters and the week number provided.
     *
     * @param int $weekNumber
     * @return string
     */
    public function getWeekName($weekNumber)
    {
        if ($weekNumber%2 != 0) {
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
     * Returns a list with the current day's lessons, or the next day's lessons if it is after 7pm.
     *
     * @param string $eleve
     * @return array
     */
    public function getTempsForOneDay($login)
    {
        // $edt = DB::table('absences_eleves')->where('eleve_absence_eleve', $eleve)->where('ra', NULL)->get()->count();

        if (date('H') < 19) {
            $day = date('N');
        } else {
            $day = date('N')+1;
        }
        switch ($day) {
            case 1:
                $edt = ['0' => ['name' => "Numérique Sc. Informatique", 'time' => ['start' => '8:00', 'end' => '10:00'], 'room' => 'Labo SNT', 'color' => 'AFDEF9'], '2' => ['name' => "Espagnol", 'time' => ['start' => '10:00', 'end' => '11:00'], 'room' => '208', 'color' => 'F2ED82'], '3' => ['name' => "Accompagnement Personalisé", 'time' => ['start' => '11:00', 'end' => '12:00'], 'room' => '208', 'color' => 'FFED00'], '4' => ['name' => "", 'time' => ['start' => '', 'end' => ''], 'room' => '', 'color' => ''], '5' => ['name' => "Physique-Chimie", 'time' => ['start' => '13:30', 'end' => '15:30'], 'room' => '3è TP Physique', 'color' => 'F4DAD7'], '6' => ['name' => "Histoire-Géographie", 'time' => ['start' => '15:30', 'end' => '17:30'], 'room' => 'A08', 'color' => '43B061']];
                break;
            case 2:
                $edt = ['0' => ['name' => "Ens. Sc. SVT", 'time' => ['start' => '9:00', 'end' => '10:00'], 'room' => '209', 'color' => 'D6A0C8'], '2' => ['name' => "Mathématiques", 'time' => ['start' => '10:00', 'end' => '12:00'], 'room' => 'A03', 'color' => '4576BA'], '3' => ['name' => "", 'time' => ['start' => '', 'end' => ''], 'room' => '', 'color' => ''], '4' => ['name' => "Français", 'time' => ['start' => '13:30', 'end' => '15:30'], 'room' => 'A08', 'color' => 'E73A1F'], '5' => ['name' => "Anglais", 'time' => ['start' => '15:30', 'end' => '16:30'], 'room' => '207', 'color' => 'D6A0C8'], '6' => ['name' => "Histoire-Géographie", 'time' => ['start' => '16:30', 'end' => '17:30'], 'room' => '108', 'color' => '43B061']];
                break;
            case 3:
                $edt = ['0' => ['name' => "Physique-Chimie", 'time' => ['start' => '8:00', 'end' => '10:00'], 'room' => '3è TP Physique', 'color' => 'F4DAD7'], '1' => ['name' => "Français", 'time' => ['start' => '10:00', 'end' => '11:00'], 'room' => 'A04', 'color' => 'E73A1F']];
                break;
            case 4:
                $edt = ['0' => ['name' => "Français", 'time' => ['start' => '8:00', 'end' => '9:00'], 'room' => 'A02', 'color' => 'E73A1F'], '1' => ['name' => "", 'time' => ['start' => '', 'end' => ''], 'room' => '', 'color' => ''], '3' => ['name' => "Mathématiques", 'time' => ['start' => '10:00', 'end' => '12:00'], 'room' => 'A03', 'color' => '4576BA'], '4' => ['name' => "", 'time' => ['start' => '', 'end' => ''], 'room' => '', 'color' => ''], '5' => ['name' => "Ens. Sc. Physique-Chimie", 'time' => ['start' => '13:30', 'end' => '14:30'], 'room' => '3è Physique Cours', 'color' => 'F4DAD7'], '6' => ['name' => "Euro Mathématiques", 'time' => ['start' => '14:30', 'end' => '15:30'], 'room' => 'A08', 'color' => '4EC2EE'], '7' => ['name' => "Anglais", 'time' => ['start' => '15:30', 'end' => '16:30'], 'room' => '208', 'color' => 'D6A0C8']];
                break;
            case 5:
                $edt = ['0' => ['name' => "Espagnol", 'time' => ['start' => '8:00', 'end' => '9:00'], 'room' => '203', 'color' => 'F2ED82'], '1' => ['name' => "", 'time' => ['start' => '', 'end' => ''], 'room' => '', 'color' => ''], '3' => ['name' => "Education Physique & Sportive", 'time' => ['start' => '10:00', 'end' => '12:00'], 'room' => 'EPS 3 PREMIERES', 'color' => 'FDCF67'], '4' => ['name' => "", 'time' => ['start' => '', 'end' => ''], 'room' => '', 'color' => ''], '5' => ['name' => "Numérique Sc. Informatique", 'time' => ['start' => '13:30', 'end' => '15:30'], 'room' => 'Labo SNT', 'color' => 'AFDEF9'], '6' => ['name' => "Euro Anglais", 'time' => ['start' => '15:30', 'end' => '16:30'], 'room' => '201', 'color' => '11B1D2']];
                break;
            default:
                $edt = null;
        }

        return $edt;
    }

    /**
     * Retrieves the list of courses modified for two days
     *
     * @param string $student
     * @return array
     */
    public function getModifiedCourses2d($student)
    {
        return null;
    }
}
