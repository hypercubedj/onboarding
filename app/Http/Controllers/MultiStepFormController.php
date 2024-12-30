<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;
use App\Models\Form;

class MultiStepFormController extends Controller
{
    public function showForm()
    {
        // Retourne la vue Inertia pour le formulaire multi-étapes
        return inertia('MultiStepForm');
    }

    public function submitForm(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'birth_place' => 'required|string|max:255',
            'gender' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'postal_address' => 'required|string',
            'street' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string',
        ]);

        // Enregistrement dans la base de données
        FormData::create($validated);

        // Retourne une réponse avec un message de succès
        return redirect()->back()->with('success', 'Formulaire soumis avec succès !');
    }
}
