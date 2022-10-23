<?php

namespace App\Http\Controllers;

use App\Models\Translations;
use Illuminate\Http\Request;

class TranslationsController extends Controller
{

    public function saveTranslations(Request $request)
    {

        $translations       = Translations::create();
        $translations->tagName = $request->tagName;
        $translations->es   = $request->es;
        $translations->en   = $request->en;
        $translations->save();

        return response()->json([
            'message' => 'translations successfully registered',
            'datos'   => $translations,
        ], 201);
    }

    public function fetchTranslations()
    {
        $translations = Translations::All('tagName','es', 'en');
        return response()->json($translations);
    }

}
