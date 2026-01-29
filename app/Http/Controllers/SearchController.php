<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Procedure;
use App\Models\Condition;

use App\Models\Doctor;
use App\Models\Speciality;

class SearchController extends Controller
{
    //

    public function liveSearch(Request $request)
    {
        $q = $request->q;




        if (!$q || strlen($q) < 2) {
            return response()->json([]);
        }

        return response()->json([
            'doctors' => Doctor::search($q)->take(3)->get(),
            'specialities' => Speciality::search($q)->take(3)->get(),
            'procedures' => Procedure::search($q)->take(3)->get(),
            'conditions' => Condition::search($q)->take(3)->get(),
        ]);
    }
}
