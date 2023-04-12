<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;


class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $destinataire = 'jcafootball1932@gmail.com';
        $sujet = 'Nouveau message de la page de contact';
        $contenu = "<p><strong>Nom:</strong> ".$validatedData['nom']." ".$validatedData['prenom']."</p>";
        $contenu .= "<p><strong>Email:</strong> ". $validatedData['email'] ."</p>";
        $contenu .= "<p><strong>Message:</strong> ". $validatedData['message'] ."</p>";
        
        // Valider les données du formulaire
        
        $headers = 'From: ' . $validatedData['email'] . "\r\n" .
               'Reply-To: ' . $validatedData['email'] . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    

       
         // Envoi du message
        mail($destinataire, $sujet, $contenu, $headers);

        // Redirection vers la page de confirmation
        return redirect()->back()->with('status', 'message reçu');
    }
}
