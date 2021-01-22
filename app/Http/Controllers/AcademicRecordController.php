<?php

namespace App\Http\Controllers;

use App\Models\AcademicRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcademicRecordController extends Controller
{
    public function index()
    {
        
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        AcademicRecord::create([
            'degree' => $request->degree,
            'school' => $request->school,
            'country' => $request->country,
            'month_start' => $request->month_start,
            'year_start' => $request->year_start,
            'month_end' => $request->month_end,
            'year_end' => $request->year_end,
            'user_id' => $user->id,
        ]);
        
    }
}
