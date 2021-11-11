<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    public function change(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with("error", "Votre mot de passe actuel ne correspond pas au mot de passe que vous avez fourni. Veuillez réessayer.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            return redirect()->back()->with("error", "Le nouveau mot de passe ne peut pas être le même que votre mot de passe actuel. Veuillez choisir un autre mot de passe.");
        }

        $messages = [
            'new-password.min:6' => 'Le mot de passe doit contenir au moins 6 caractères',
            'new-password.letters' => 'Le mot de passe doit contenir des lettres',
            'new-password.numbers' => 'Le mot de passe doit contenir des chiffres',
            'new-password.uncompromised' => 'Le mot de passe ne doit pas être compromis',
            'new-password.confirmed' => 'Le mot de passe doit correspondre avec sa confirmation',
        ];

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => ['required', 'string', Password::min(6)->letters()->numbers()->uncompromised(), 'confirmed'],
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success", "Le mot de passe a été changé avec succès !");
    }
}
