@extends('errors.layouts', [
    'title' => "J'ai l'impression de tourner en rond...",
    'message' => 'La requête à été redirigée de trop nombreuses fois. Veuillez réessayer plus tard.',
    'errorLevel' => 'warning',
    'errorCode' => 310,
    'homeLink' => true,
])
