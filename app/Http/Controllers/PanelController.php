<?php

namespace App\Http\Controllers;

use App\Models\Documento;
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

    // Salvar os documentos no banco de dados
    foreach ($pdfs as $pdf) {
        $nomeArquivo = pathinfo($pdf, PATHINFO_FILENAME);
        $descricao = 'Descrição do documento';

        // Verifica se o documento já existe no banco de dados
        if (!Documento::where('nome_arquivo', $nomeArquivo)->exists()) {
            // Salva no banco de dados
            Documento::create([
                'nome_arquivo' => $nomeArquivo,
                'descricao' => $descricao,
                'path' => basename($pdf),
            ]);
        }
    }

    // Recuperar documentos do banco de dados
    $documentos = Documento::all();

    return view('documentos.index', compact('documentos'));
}

    public function show($filename)
    {
        // Lógica para exibir um PDF específico
        $documento = Documento::where('nome_arquivo', $filename . '.pdf')->first();

        if ($documento) {
            $path = public_path($documento->path);

            // Verifica se o arquivo existe antes de tentar retorná-lo
            if (file_exists($path)) {
                return response()->file($path);
            }
        }

        abort(404);
    }
}
