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

        // Filter by location
        if ($request->filled('location') && $request->location !== 'All') {
            if ($request->location === 'Both') {
                $query->where('location', 'Both');
            } else {
                $query->where('location', $request->location);
            }
        }

        // Filter by speciality
        if ($request->filled('specialty') && $request->specialty !== 'All') {
            $query->whereHas('speciality', function ($q) use ($request) {
                $q->where('name', $request->specialty);
            });
        }

        $doctors = $query->oldest()->paginate(9)->withQueryString();

        $specialities = Speciality::orderBy('name')->get();


     

        return view('doctors.index', compact('doctors', 'specialities'));
    }
}
