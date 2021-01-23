<?php

namespace App\Http\Controllers;

use App\Models\AcademicRecord;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $users = User::all();

        return $users;
    }

    public function show(User $user)
    {
        $user = User::find($user->id);
        return $user;
    }

    public function showAcademicRecords(User $user)
    {
        $records = $user->academicRecords()->get();
        return $records;
    }

    public function showWorkExperience(User $user)
    {
        $works = $user->workExperiences()->get();
        return $works;
    }
}
