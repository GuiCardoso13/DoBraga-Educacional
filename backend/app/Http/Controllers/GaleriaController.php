<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Galeria::query();

        if ($search) {
        $galerias = Galeria::where('id', 'like', "%{$search}%")
            ->paginate(10);
    } else {
        $galerias = Galeria::paginate(10);
    }

    return view('galerias.index', compact('galerias'));
    }


    public function create()
    {
        return view('galerias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,webp|max:16384',
        ]);

        $path = $request->file('foto')->store('galeria', 'public_uploads');

        Galeria::create([
            'foto' => $path
        ]);

        return redirect()->route('galerias.index')->with('success', 'Imagem adicionada à galeria!');
    }

    public function edit(Galeria $galeria)
    {
        return view('galerias.edit', compact('galeria'));
    }

    public function update(Request $request, Galeria $galeria)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:16384',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('galeria', 'public_uploads');
            $galeria->foto = $path;
        }

        $galeria->save();

        return redirect()->route('galerias.index')->with('success', 'Imagem atualizada!');
    }

    public function destroy(Galeria $galeria)
    {
        $galeria->delete();
        return redirect()->route('galerias.index')->with('success', 'Imagem removida!');
    }
}
