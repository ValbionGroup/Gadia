<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class DashboardLinksController extends Controller
{
    public static function isLinkSet()
    {
        $db = DB::table('links');

        if (isEmpty($db)) {
            return false;
        } else {
            return true;
        }
    }

    public static function getLinks()
    {
        $db = json_decode(DB::table('links')->get(), true);

        return $db;
    }
}
