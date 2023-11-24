<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PanelController extends Controller
{
    public function index()
{
    // Lógica para obter a lista de arquivos do diretório 'public/docs'
    $files = File::files(public_path('docs'));

    // Filtra apenas os arquivos com a extensão .pdf
    $pdfs = array_filter($files, function ($file) {
        return pathinfo($file, PATHINFO_EXTENSION) === 'pdf';
    });

    return view('documentos.index', compact('pdfs'));
}

    public function show($filename)
    {
        // Lógica para exibir um PDF específico
        $path = Storage::path('docs/' . $filename);

        return response()->file($path);
    }
}
