@extends('errors.layouts', [
    'title' => "Problème de legislation",
    'message' => 'La ressource que vous avez demandé est innacessible pour des raisons d\'ordre légal.',
    'errorLevel' => 'warning',
    'errorCode' => 451,
    'homeLink' => true,
])
