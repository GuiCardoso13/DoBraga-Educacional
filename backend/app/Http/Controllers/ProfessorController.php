<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Professor::query();

        if ($search) {
            $professores = Professor::where('nome', 'like', "%{$search}%")
                ->orWhere('descricao', 'like', "%{$search}%")
                ->paginate(10);
        } else {
            $professores = Professor::paginate(10);
        }

        return view('professores.index', compact('professores'));
    }

    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable',
            'foto' => 'image|mimes:jpg,jpeg,png|max:8192'
    ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('professores', 'public');
        }

        Professor::create($data);

        return redirect()->route('professores.index')->with('success', 'Professor cadastrado!');
    }

    public function edit(Professor $professor)
    {
        return view('professores.edit', compact('professor'));
    }

    public function update(Request $request, Professor $professor)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable',
            'foto' => 'image|mimes:jpg,jpeg,png|max:8192'
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            // Excluir arquivo antigo se existir
            if ($professor->foto && \Storage::disk('public')->exists($professor->foto)) {
                \Storage::disk('public')->delete($professor->foto);
            }

            $data['foto'] = $request->file('foto')->store('professores', 'public');
        }

        $professor->update($data);

        return redirect()->route('professores.index')->with('success', 'Professor atualizado!');
    }

    public function destroy(Professor $professor)
    {
        $professor->delete();
        return redirect()->route('professores.index')->with('success', 'Professor removido!');
    }
}
