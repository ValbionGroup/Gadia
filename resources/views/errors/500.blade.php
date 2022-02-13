@extends('errors.layouts', [
    'title' => "Oupsi, c'est de notre faute",
    'message' => 'Une erreur interne est survenue, veuillez réessayer plus tard. Si le problème persiste, veuillez contacter l\'administrateur du site.',
    'errorLevel' => 'danger',
    'errorCode' => 500,
    'homeLink' => true,
])
