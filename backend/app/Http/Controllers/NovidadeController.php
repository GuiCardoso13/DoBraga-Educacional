<?php

namespace App\Http\Controllers;

use App\Models\Novidade;
use Illuminate\Http\Request;

class NovidadeController extends Controller
{
   public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Novidade::query();

        if ($search) {
        $novidades = Novidade::where('id', 'like', "%{$search}%")
            ->paginate(10);
    } else {
        $novidades = Novidade::paginate(10);
    }

    return view('novidades.index', compact('novidades'));
    }

    public function create()
    {
        return view('novidades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        Novidade::create($request->all());

        return redirect()->route('novidades.index')->with('success', 'Novidade cadastrada!');
    }

    public function edit(Novidade $novidade)
    {
        return view('novidades.edit', compact('novidade'));
    }

    public function update(Request $request, Novidade $novidade)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        $novidade->update($request->all());

        return redirect()->route('novidades.index')->with('success', 'Novidade atualizada!');
    }

    public function destroy(Novidade $novidade)
    {
        $novidade->delete();
        return redirect()->route('novidades.index')->with('success', 'Novidade removida!');
    }
}
