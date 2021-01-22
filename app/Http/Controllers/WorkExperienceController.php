<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function index()
    {
        
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        WorkExperience::create([
            'position' => $request->position,
            'organization_name' => $request->organization_name,
            'organization_activity' => $request->organization_activity,
            'description' => $request->description,
            'month_start' => $request->month_start,
            'year_start' => $request->year_start,
            'month_end' => $request->month_end,
            'year_end' => $request->year_end,
            'user_id' => $user->id,
        ]);
    }
}
