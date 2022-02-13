@extends('errors.layouts', [
    'title' => "Nous revenons très vite",
    'message' => 'Notre site est actuellement en maintenance. C\'est sûrement que nous procédons à une mise à jour. Nous vous invitons à revenir plus tard.',
    'errorLevel' => 'maintenance',
    'errorCode' => 503,
    'homeLink' => false,
])
