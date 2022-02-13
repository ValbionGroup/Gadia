@extends('errors.layouts', [
    'title' => "J'ai attendu trop longtemps",
    'message' => 'Le temps d\'attente entre ce serveur et le serveur intermédiaire est trop long. Veuillez réessayer plus tard.',
    'errorLevel' => 'danger',
    'errorCode' => 504,
    'homeLink' => false,
])
