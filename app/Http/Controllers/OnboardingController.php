<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    public function index()
    {
        return inertia('Onboarding/Index'); // Vue Vue.js pour la page d'onboarding
    }

    public function store(Request $request)
    {
        // Logique pour enregistrer les données du formulaire d'onboarding
        return redirect()->route('onboarding.index');
    }
}
