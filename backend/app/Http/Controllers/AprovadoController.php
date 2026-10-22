<?php

namespace App\Http\Controllers;

use App\Models\Aprovado;
use Illuminate\Http\Request;

class AprovadoController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $aprovados = Aprovado::when($search, function ($query) use ($search) {
            $query->where('nome', 'like', "%{$search}%")
                ->orWhere('descricao', 'like', "%{$search}%")
                ->orWhere('mensagem', 'like', "%{$search}%");
        })->paginate(10);

        return view('aprovados.index', compact('aprovados'));
    }

    public function create()
    {
        return view('aprovados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable',
            'imagem' => 'required|image|mimes:jpeg,png,jpg|max:8192',
            'mensagem' => 'nullable'
        ]);

        $path = $request->file('imagem')->store('aprovados', 'public_uploads');

        Aprovado::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'imagem' => $path,
            'mensagem' => $request->mensagem,
        ]);

        return redirect()->route('aprovados.index')->with('success', 'Aluno aprovado cadastrado!');
    }

    public function edit(Aprovado $aprovado)
    {
        return view('aprovados.edit', compact('aprovado'));
    }

    public function update(Request $request, Aprovado $aprovado)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg|max:8192',
            'mensagem' => 'nullable'
        ]);

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('aprovados', 'public_uploads');
            $aprovado->imagem = $path;
        }

        $aprovado->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'mensagem' => $request->mensagem,
        ]);

        return redirect()->route('aprovados.index')->with('success', 'Aluno aprovado atualizado!');
    }

    public function destroy(Aprovado $aprovado)
    {
        $aprovado->delete();
        return redirect()->route('aprovados.index')->with('success', 'Aluno aprovado removido!');
    }

    public function loadMore(Request $request)
    {
        $skip = $request->query('skip', 0);
        $aprovados = Aprovado::skip($skip)->take(3)->get();

        return view('partials._aprovados_card', compact('aprovados'))->render();
    }
}
