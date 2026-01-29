<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    //

    public function index(Request $request)
    {
        $query = Procedure::where('is_active', true);


        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }


        if ($request->filled('letter') && $request->letter !== 'ALL') {
            $query->where('title', 'like', $request->letter . '%');
        }

        $procedures = $query->orderBy('title')->paginate(10)->withQueryString();

        return view('procedures.index', compact('procedures'));
    }





    public function show($slug)
    {


        $procedure = Procedure::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('procedures.show', compact('procedure'));
    }



    public function searchableAs()
    {
        return 'procedures';
    }
}
