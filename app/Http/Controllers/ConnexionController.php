<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    /**
     * Affiche le formulaire de connexion.
     *
     * @return View
     */
    public function create()
    {
        return view('auth.connexion.create');
    }

    /**
     * Authentifie l'utilisateur et gère la connexion.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authentifier(Request $request)
    {
        $valides = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ], [
            "email.required" => "Le courriel est obligatoire",
            "email.email" => "Le courriel doit avoir un format valide",
            "password.required" => "Le mot de passe est requis"
        ]);

        if(Auth::attempt($valides)){
            $request->session()->regenerate();

            return redirect()
                    ->intended(route('messages.index'))
                    ->with('succes', 'Je suis contente de te revoir !');
        }

        return back()
                ->withErrors([
                    "email" => "Les informations fournies ne sont pas valides"
                ])
                ->onlyInput('email');

    }

    /**
     * Déconnecte l'utilisateur.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function deconnecter(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
                ->route('accueil')
                ->with('succes', 'Tu vas me manquer !');
    }
}
