<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;

class MessageController extends Controller
{

    /**
     * Affiche la liste des messages de l'utilisateur.
     *
     * @return View
     */
    public function index()
    {
        $messages = auth()->user()->messages()->orderBy('created_at', 'desc')->get();
        return view('messages.index', compact('messages'));
    }

    /**
     * Traite la conversation et affiche les messages mis à jour.
     *
     * @param Request $request
     * @return View
     */
    public function conversation(Request $request)
    {
        // Valider la question soumise par le formulaire.
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        // Obtenir la question du formulaire.
        $question = $request->input('question');

        // Créer un nouvel objet Message.
        $message = new Message();
        $message->question = $question;

        // Associer le message à l'utilisateur actuellement authentifié.
        $user = auth()->user();
        $message->user()->associate($user);

        // Lire le contenu du fichier JSON contenant les phrases et leurs réponses.
        $jsonFile = storage_path('app/data/phrases.json');
        $phrases = json_decode(file_get_contents($jsonFile), true);

        // Recherche de la réponse appropriée dans le fichier JSON.
        $reponse = null;

        foreach ($phrases as $keyword => $phrase) {
            if (mb_stripos($question, $keyword) !== false) {
                $reponse = $phrase;
                break;
            }
        }

        // Si aucune réponse n'a été trouvée, utiliser une réponse par défaut
        if ($reponse === null) {
            $reponse = "Je ne sais pas quoi répondre...";
        }

        // Remplacer les placeholders dans la réponse avec les données actuelles.
        $reponse = str_replace('[nom]', auth()->user()->prenom . ' ' . auth()->user()->nom, $reponse);
        $reponse = str_replace('[heure]', now()->format('H:i'), $reponse);

        // Enregistrer la réponse dans l'objet Message.
        $message->reponse = $reponse;
        $message->save();

        // Récupérer tous les messages associés à l'utilisateur actuellement authentifié.
        $messages = auth()->user()->messages()->orderBy('created_at', 'desc')->get();

        // Charger la vue et passer les messages à la vue.
        return view('messages.index', compact('messages'));
    }
}
