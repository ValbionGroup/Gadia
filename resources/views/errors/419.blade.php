@extends('errors.layouts', [
    'title' => "Qu'est-ce que ?",
    'message' => 'La requête que vous avez effectuée a expiré. Veuillez réessayer dès que possible.',
    'errorLevel' => 'warning',
    'errorCode' => 419,
    'homeLink' => true,
])
