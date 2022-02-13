@extends('errors.layouts', [
    'title' => "Que faites vous là ?",
    'message' => 'Vous n\'avez pas les droits suffisants pour accéder à cette page ou a ce fichier.',
    'errorLevel' => 'danger',
    'errorCode' => 403,
    'homeLink' => false,
])
