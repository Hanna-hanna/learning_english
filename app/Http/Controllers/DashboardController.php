<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use App\Models\Vocabular;

class DashboardController extends Controller
{
    public function index()
    {
        $vocabular = Vocabular::all();

        return Inertia::render('Dashboard', [
            'vocabular' => $vocabular
        ]);
    }
}