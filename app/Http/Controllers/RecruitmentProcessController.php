<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitmentProcessController extends Controller
{
    public function index()
    {
        return view('recruitmentprocess.index');
    }
}
