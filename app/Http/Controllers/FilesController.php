<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    /**
     * Store file and return argument needed to access to it.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function uploadFile(Request $request)
    {
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename_noExt = str_replace(' ', '_', $file->getClientOriginalName());
            $filename = pathinfo($filename_noExt, PATHINFO_FILENAME) . '.' . $file->getClientOriginalExtension();
            $fileHash = md5_file($file);
            return ['hash' => $fileHash, 'name' => $filename, 'error' => ['code' => 0, 'message' => 'Fichier envoyé correctement']];
        } else {
            return ['hash' => null, 'name' => null, 'error' => ['code' => -1, 'message' => 'Aucun fichier envoyé']];
        }
    }

    /**
     * Return URL to file uploaded.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $hash
     * @return  string  $filename
     * @return  string|null
     */
    public function getFileUrl(Request $request, $hash, $filename)
    {
        $token = $request->session()->get('_token');
        if (isset($hash) and isset($filename)) {
            return url('/files/' . $hash . '/' . $token . '/' . $filename);
        } else {
            return null;
        }
    }

    /**
     * Verify if file can be access with the following argument, and return view of file.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $hash
     * @param  string  $token
     * @param  string  $filename
     * @return  \Illuminate\Http\Response
     */
    public function accessFile(Request $request, $hash, $token, $filename)
    {
        $actualToken = $request->session()->get('_token');
        $file = storage_path('app/upload/' . $filename);
        if (file_exists($file)) {
            if (md5_file($file) == $hash) {
                if ($token == $actualToken) {
                    return response()->file($file);
                } else {
                    return abort(403, 'Accès au fichier refusé');
                }
            } else {
                return abort(403, 'Accès au fichier refusé');
            }
        } else {
            return abort(404, 'Fichier introuvable');
        }
    }
}
