<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;

class AboutController extends Controller
{
    public function show(Request $request)
    {
        $file = Jetstream::localizedMarkdownPath('about.md');

        return Inertia::render('About', [
            'about' => Str::markdown(file_get_contents($file)),
        ]);
    }
}
