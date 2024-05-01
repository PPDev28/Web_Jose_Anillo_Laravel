<?php

namespace App\Http\Controllers;

use App\Services\DownloadService;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Http\RedirectResponse;

readonly class BioController
{
    public function __construct(private DownloadService $downloadService) {}

    public function index(): BinaryFileResponse|RedirectResponse
    {
        $archive = public_path('archives/dossier_jose.pdf');

        return $this->downloadService->download($archive, 'Dossier.pdf');
    }
}
