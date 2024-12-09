<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorStat;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = VisitorStat::selectRaw('page_visited, COUNT(*) as visits')
            ->groupBy('page_visited')
            ->orderByDesc('visits')
            ->get();

        return view('Statistik.index', compact('stats'));
    }
}
