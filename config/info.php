<?php

/**
 * Ici vous pouvez configurer les informations concernant l'établissement
 * Certainnes de ces données sont aussi remplise automatiquement lors de l'importation de l'établissement via Siècle
 */

return [

    // Exemple de nom : Collège Jean Rostand Mont-de-Marsan
    //                  ^^^^^^  ^^^^^^^^^^^^ ^^^^^^^^^^^^^^
    //                   Type        Nom         Lieu
    // Type d'établisement (Ex : Lycée Général et Technologique // Lycée Professionel // Collège // Etc...)
    'etabTitle' => 'Lycée Général et Technologique',
    // Nom de l'établissement (SANS L'INDICATION DE LIEU)
    'etabName' => 'Victor Duruy',
    // Diminutif de l'établissement
    // Ex. Lycée Général et Technologique => Lycée || ou encore établissements régionaux d'enseignement adapté => ÉREA
    'etabDim' => 'Lycée',
    // [OPTIONEL] Précision du lieu de l'établissement (Ex. Mont-de-Marsan)
    'etabPlace' => '',

    /**
     * [OPTIONEL] Logo de l'établissement
     * Le logo doit être carré, et d'une résolution acceptable.
     * Il est recommandé d'avoir une image en 512x512
     *
     * (Entrez ici une URL ou le lien symbolique vers un fichier sur le serveur présent dans le dossier public/ )
     *
     * Format pris en charge : .png, .jpg, .jpeg, .svg, .gif
     */
    'etabLogo' => '',

];
