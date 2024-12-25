<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Lignes de Langue pour la Réinitialisation du Mot de Passe
    |--------------------------------------------------------------------------
    |
    | Les lignes suivantes sont les messages par défaut qui correspondent aux raisons
    | fournies par le courtier de mot de passe pour une tentative de mise à jour du mot de passe,
    | comme l'échec dû à un jeton de réinitialisation de mot de passe invalide.
    |
    */

    'reset' => 'Votre mot de passe a été réinitialisé.',
    'sent' => 'Nous avons envoyé un lien de réinitialisation de mot de passe à votre adresse e-mail.',
    'throttled' => 'Veuillez attendre avant de réessayer.',
    'token' => 'Ce jeton de réinitialisation de mot de passe est invalide.',
    'user' => "Impossible de trouver un utilisateur avec cette adresse e-mail.",
    'password_reset' => [
        'subject' => "Réinitialiser votre mot de passe",
        'button' => "Réinitialiser",
        'greeting' => "Bonjour !",
        'line_1' => "Vous recevez cet email car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.",
        'line_2' => "Ce lien de réinitialisation de mot de passe expirera dans 60 minutes.",
        'line_3' => "Si vous n'avez pas demandé de réinitialisation de mot de passe, aucune action n'est nécessaire.",
        'formula' => "Cordialement,",
        'footer' => "Si vous rencontrez des difficultés pour cliquer sur le bouton \":actionText\", copiez et collez l'URL ci-dessous dans votre navigateur web :"
    ]

];
