@extends('errors.layouts', [
    'title' => "Vous avez du faire une erreur quelque part...",
    'message' => 'Nous avons reçu des entêtes HTTP dépassant la limite de la configuration de notre serveur. Veuillez contacter l\'administrateur pour plus d\'informations.',
    'errorLevel' => 'warning',
    'errorCode' => 431,
    'homeLink' => true,
])
