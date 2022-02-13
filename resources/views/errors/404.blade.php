@extends('errors.layouts', [
    'title' => "Bonjour, c'est moi que vous cherchez ?",
    'message' => 'Le fichier que vous cherchez n\'existe pas ou plus. Si vous pensez qu\'il s\'agit d\'une erreur, n\'hésitez pas à nous contacter.',
    'errorLevel' => 'warning',
    'errorCode' => 404,
    'homeLink' => true,
])
