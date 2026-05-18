<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setting;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Work;

class PortfolioController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $skills = Skill::all();
        $experiences = Experience::all();
        $works = Work::all();

        return view('welcome', compact('settings', 'skills', 'experiences', 'works'));
    }
}
