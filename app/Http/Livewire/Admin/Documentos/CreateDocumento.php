<?php

namespace App\Http\Livewire\Admin\Documentos;

use App\Models\Documento;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateDocumento extends Component
{
    use WithFileUploads;
    public Documento $documento;

    function rules()
    {
        return [
            'documento.arquivo' => ['required'],
            'documento.nome_arquivo' => ['required', 'string'],
        ];
    }

    public function store()
    {
        $this->validate();

        DB::transaction(function () {
            $this->documento->save();
        });

        session()->flash('success', 'Documento ' . $this->documento->nome_arquivo . ' cadastrado com sucesso!');

        return redirect()->route('documentos.index');
    }

    public function mount()
    {
        $this->documento = new Documento();
    }


    public function render()
    {
        return view('admin.documentos.create-documento')->layout('layouts.admin');
    }
}