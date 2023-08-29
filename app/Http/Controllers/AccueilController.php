<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Affiche la page d'accueil.
     *
     * @return View
     */
    public function index()
    {
        return view('index');
    }
}
