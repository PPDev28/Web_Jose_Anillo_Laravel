<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Http\RedirectResponse;

class DownloadService
{
    public function download($archive, string $name): BinaryFileResponse|RedirectResponse
    {
        if (file_exists($archive)) {
            return response()->download($archive, $name);
        }

        return redirect()->back()->with('error', 'El archivo no existe.');

    }
}
