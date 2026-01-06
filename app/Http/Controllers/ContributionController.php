<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contribution;

class ContributionController extends Controller
{
    public function show(Contribution $contribution)
    {
        $contributions = Contribution::all();

        $projects = Contribution::where('type', 'project')->get();
        $prs = Contribution::where('type', 'pr')->get();
        $issues = Contribution::where('type', 'issue')->get();

        return view('contributions', compact('projects', 'prs', 'issues'));
    }
}
