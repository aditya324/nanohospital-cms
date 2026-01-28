<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $query = Doctor::with('speciality');

        // LOCATION FILTER
        if ($request->filled('location') && $request->location !== 'All') {
            if ($request->location === 'Both') {
                $query->whereIn('location', ['Uttarahalli', 'Hulimavu']); 
            } else {
                $query->where('location', $request->location);
            }
        }

        // SPECIALTY FILTER
        if ($request->filled('specialty') && $request->specialty !== 'All') {
            $query->whereHas('speciality', function ($q) use ($request) {
                $q->where('name', $request->specialty);
            });
        }

        // 🔍 DOCTOR NAME SEARCH (NEW)
        if ($request->filled('search')) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }

        $doctors = $query->oldest()->paginate(9)->withQueryString();
        $specialities = Speciality::orderBy('name')->get();

        return view('doctors.index', compact('doctors', 'specialities'));
    }
}
