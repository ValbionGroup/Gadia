<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtablissementController extends Controller
{
    public function show()
    {
        $schoolname = DB::table('settings')->where('NAME', 'schoolName')->value('VALUE');
        $schooltype = DB::table('settings')->where('NAME', 'schoolType')->value('VALUE');
        $typedim = DB::table('settings')->where('NAME', 'typeDim')->value('VALUE');
        $adresscity = DB::table('settings')->where('NAME', 'adressCity')->value('VALUE');
        $adresszip = DB::table('settings')->where('NAME', 'adressZip')->value('VALUE');
        $adressstate = DB::table('settings')->where('NAME', 'adressState')->value('VALUE');
        $adressdept = DB::table('settings')->where('NAME', 'adressDept')->value('VALUE');
        $adress = DB::table('settings')->where('NAME', 'adressStreet')->value('VALUE');
        $codeuai = DB::table('settings')->where('NAME', 'codeUai')->value('VALUE');
        $logo = DB::table('settings')->where('NAME', 'logoEtab')->value('VALUE');
        $cachet = DB::table('settings')->where('NAME', 'cachet')->value('VALUE');

        # Journey
        $day = DB::table('settings')->where('NAME', 'journey')->value('VALUE');
        $fullHours = DB::table('settings')->where('NAME', 'fullHours')->value('VALUE');
        $journey = DB::table('journey')->get();

        return view('direction.settings.etab.etablissement', [
            'page_name' => 'Paramètres globaux',
            'schoolname' => $schoolname,
            'schooltype' => $schooltype,
            'typedim' => $typedim,
            'adresscity' => $adresscity,
            'adresszip' => $adresszip,
            'adressstate' => $adressstate,
            'adressdept' => $adressdept,
            'adress' => $adress,
            'codeuai' => $codeuai,
            'logo' => $logo,
            'cachet' => $cachet,
            'signatures' => $this->getSignatures(),
            'vacations' => $this->getVacations(),
            'journey' => [
                'day' => $day,
                'full_hours' => $fullHours,
                'journeys' => $journey,
            ]
        ]);
    }

    public function saveIdentity(Request $request)
    {
        $schooltype = DB::table('settings')->where('NAME', 'schoolType')->value('VALUE');
        if ($request->get('etab-type') != $schooltype) {
            DB::table('settings')->where('NAME', 'schoolType')->update(['VALUE' => $request->get('etab-type')]);
        }

        $schoolname = DB::table('settings')->where('NAME', 'schoolName')->value('VALUE');
        if ($request->get('etab-name') != $schoolname) {
            DB::table('settings')->where('NAME', 'schoolName')->update(['VALUE' => $request->get('etab-name')]);
        }

        $typedim = DB::table('settings')->where('NAME', 'typeDim')->value('VALUE');
        if ($request->get('etab-dim') != $typedim) {
            DB::table('settings')->where('NAME', 'typeDim')->update(['VALUE' => $request->get('etab-dim')]);
        }

        $adresscity = DB::table('settings')->where('NAME', 'adressCity')->value('VALUE');
        if ($request->get('city') != $adresscity) {
            DB::table('settings')->where('NAME', 'adressCity')->update(['VALUE' => $request->get('city')]);
        }

        $adresszip = DB::table('settings')->where('NAME', 'adressZip')->value('VALUE');
        if ($request->get('zip') != $adresszip) {
            DB::table('settings')->where('NAME', 'adressZip')->update(['VALUE' => $request->get('zip')]);
        }

        $adressState = DB::table('settings')->where('NAME', 'adressState')->value('VALUE');
        if ($request->get('state') != $adressState) {
            if ($request->get('state') == 'null') {
                $adressState = null;
            } else {
                $adressState = $request->get('state');
            }
            DB::table('settings')->where('NAME', 'adressState')->update(['VALUE' => $adressState]);
        }

        $adressDept = DB::table('settings')->where('NAME', 'adressDept')->value('VALUE');
        if ($request->get('dep') != $adressDept) {
            if ($request->get('dep') == 'null') {
                $adressDept = null;
            } else {
                $adressDept = $request->get('dep');
            }
            DB::table('settings')->where('NAME', 'adressDept')->update(['VALUE' => $adressDept]);
        }

        $adress = DB::table('settings')->where('NAME', 'adressStreet')->value('VALUE');
        if ($request->get('adress') != $adress) {
            DB::table('settings')->where('NAME', 'adressStreet')->update(['VALUE' => $request->get('adress')]);
        }

        $codeuai = DB::table('settings')->where('NAME', 'codeUai')->value('VALUE');
        if ($request->get('uai') != $codeuai) {
            DB::table('settings')->where('NAME', 'codeUai')->update(['VALUE' => $request->get('uai')]);
        }

        $license = DB::table('settings')->where('NAME', 'licenseKey')->value('VALUE');
        if ($request->get('license') != $license) {
            DB::table('settings')->where('NAME', 'licenseKey')->update(['VALUE' => $request->get('license')]);
        }

        return redirect()->back()->with("success", "Les paramètres sont correctement enregistrés !");
    }

    public function saveLogo(Request $request)
    {
        $logo = DB::table('settings')->where('NAME', 'logoEtab')->value('VALUE');
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename_ext = $file->getClientOriginalName();
            $filename = pathinfo($filename_ext, PATHINFO_FILENAME) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/img/logo/'), $filename);
            if ($logo != 'default.jpg') {
                unlink(public_path('/img/logo/' . $logo));
            }
            DB::table('settings')->where('NAME', 'logoEtab')->update(['VALUE' => $filename]);
            return redirect()->back()->with("success", "Le logo est correctement enregistré !");
        } else {
            return redirect()->back()->with("error", "Erreur lors de l'enregistrement du logo !");
        }
    }

    private function getSignatures()
    {
        $signatures = DB::table('signs')->get();
        return $signatures;
    }

    public function saveSignatures(Request $request)
    {
        if ($request->hasFile('signs')) {
            foreach ($request->allFiles('signs') as $file) {
                $filename_ext = $file->getClientOriginalName();
                $filename = pathinfo($filename_ext, PATHINFO_FILENAME) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('/img/signature/'), $filename);
                DB::table('signs')->insert(['name' => pathinfo($filename_ext, PATHINFO_FILENAME), 'location' => $filename]);
            }
            return redirect()->back()->with("success", "Les signatures sont correctement enregistrés !");
        } else {
            return redirect()->back()->with("error", "Erreur lors de l'enregistrement des signatures !");
        }
    }

    public function deleteSignature($id)
    {
        $location = DB::table('signs')->where('id', $id)->value('location');
        unlink(public_path('/img/signature/' . $location));
        DB::table('signs')->where('id', $id)->delete();
        return redirect()->back()->with("success", "La signature " . $id . " a bien été supprimée !");
    }

    public function modifySignature($id, $name)
    {
        DB::table('signs')->where('id', $id)->update(['name' => $name]);
        return redirect()->back()->with("success", "La signature " . $id . " a bien été modifié !");
    }

    public function saveCachet(Request $request)
    {
        $cachet = DB::table('settings')->where('NAME', 'cachet')->value('VALUE');
        if ($request->hasFile('cachet')) {
            $file = $request->file('cachet');
            $filename = 'cachet.' . $file->getClientOriginalExtension();
            if ($cachet != null) {
                unlink(public_path('/img/signature/' . $cachet));
            }
            $file->move(public_path('/img/signature/'), $filename);
            DB::table('settings')->where('NAME', 'cachet')->update(['VALUE' => $filename]);
            return redirect()->back()->with("success", "Le cachet est correctement enregistré !");
        } else {
            return redirect()->back()->with("error", "Erreur lors de l'enregistrement du cachet !");
        }
    }

    public function getNewVacations()
    {
        DB::table('vacations')->delete();

        $baseVac = 'https://data.education.gouv.fr/api/records/1.0/search/?dataset=fr-en-calendrier-scolaire&lang=fr&exclude.population=Enseignants';
        $baseFer = 'https://calendrier.api.gouv.fr/jours-feries/';
        $location = ['Bordeaux', 'metropole'];
        $annee_scolaire = '2021-2022';
        $requestVac = $baseVac . '&refine.location=' . $location[0] . '&refine.annee_scolaire=' . $annee_scolaire;
        $years = [explode('-', $annee_scolaire)[0], explode('-', $annee_scolaire)[1]];
        $requestFer1 = $baseFer . $location[1] . '/' . $years[0] . '.json';
        $requestFer2 = $baseFer . $location[1] . '/' . $years[1] . '.json';
        $responseVac = file_get_contents($requestVac);
        $responseFer1 = file_get_contents($requestFer1);
        $json_fer1 = json_decode($responseFer1, true);
        $responseFer2 = file_get_contents($requestFer2);
        $json_fer2 = json_decode($responseFer2, true);
        $feries = array_merge($json_fer1, $json_fer2);
        $json_vacations = json_decode($responseVac, true);
        $vacations = $json_vacations['records'];
        if (count($vacations) > 0) {
            foreach ($vacations as $vacation) {
                $start_date = date('Y-m-d', strtotime($vacation['fields']['start_date']));
                $end_date = date('Y-m-d', strtotime($vacation['fields']['end_date']));
                $vacation_name = $vacation['fields']['description'];
                DB::table('vacations')->insert(['start_date' => $start_date, 'end_date' => $end_date, 'name' => $vacation_name]);
            }
            foreach ($feries as $key => $name) {
                $start_date = date('Y-m-d', strtotime($key));
                $end_date = date('Y-m-d', strtotime($key));
                if (strtotime($start_date) >= strtotime($years[0] . '-09-01') && strtotime($start_date) <= strtotime($years[1] . '-07-01')) {
                    DB::table('vacations')->insert(['start_date' => $start_date, 'end_date' => $end_date, 'name' => $name]);
                }
            }
            return redirect()->back()->with("success", "Les vacances scolaires de l'académie de " . $location[0] . " pour l'année " . $annee_scolaire . " sont correctement enregistrées !");
        } else {
            return redirect()->back()->with("error", "Aucune vacances scolaires pour l'académie de " . $location[0] . " pour l'année " . $annee_scolaire . " !");
        }
    }

    private function getVacations()
    {
        $vacations = DB::table('vacations')->get();
        $vacations = $vacations->sortBy('start_date');

        foreach ($vacations as $vacation) {
            $vacation->start_date = date('d/m/Y', strtotime($vacation->start_date));
            $vacation->end_date = date('d/m/Y', strtotime($vacation->end_date));
        }

        return $vacations;
    }

    public function saveJourney(Request $request)
    {
        switch ($request->get('day')) {
            case 'continue':
                DB::table('settings')->where('NAME', 'journey')->update(['VALUE' => "continue"]);
                break;

            case 'pause':
                DB::table('settings')->where('NAME', 'journey')->update(['VALUE' => "pause"]);
                break;
        }

        if ($request->get('fullHours') == 'on') {
            DB::table('settings')->where('NAME', 'fullHours')->update(['VALUE' => 1]);
        } else {
            DB::table('settings')->where('NAME', 'fullHours')->update(['VALUE' => 0]);
        }

        $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
        foreach ($days as $day) {
            if ($request->get($day . 'M') == 'disabled' and $request->get($day . 'A') == 'disabled') {
                DB::table('journey')->where('day', $day)->update(['state' => 3]);
            } else if ($request->get($day . 'M') == 'disabled') {
                DB::table('journey')->where('day', $day)->update(['state' => 1]);
            } else if ($request->get($day . 'A') == 'disabled') {
                DB::table('journey')->where('day', $day)->update(['state' => 2]);
            } else {
                DB::table('journey')->where('day', $day)->update(['state' => 0]);
            }
        }

        return redirect()->back()->with("success", "Les données pour les journées sont correctement enregistrées !");
    }
}
