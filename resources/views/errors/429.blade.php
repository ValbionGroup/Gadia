@extends('errors.layouts', [
    'title' => "Vous y aller un peu fort !",
    'message' => 'Vous avez émis trop de requêtes, veuillez patienter quelques minutes avant de recommencer.',
    'errorLevel' => 'warning',
    'errorCode' => 429,
    'homeLink' => false,
])
