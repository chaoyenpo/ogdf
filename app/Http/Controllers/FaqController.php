<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;

class FaqController extends Controller
{
    public function show(Request $request)
    {
        $file = Jetstream::localizedMarkdownPath('faq.md');

        return Inertia::render('Faq', [
            'faq' => Str::markdown(file_get_contents($file)),
        ]);
    }
}
