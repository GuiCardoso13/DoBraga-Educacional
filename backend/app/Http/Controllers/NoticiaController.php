<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\NoticiaParagrafos;
use App\Models\NoticiaAnexos;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $noticias = Noticia::where('titulo', 'like', "%{$search}%")
                ->orWhere('categoria', 'like', "%{$search}%")
                ->orWhere('descricao', 'like', "%{$search}%")
                ->paginate(10);
        } else {
            $noticias = Noticia::paginate(10);
        }

        return view('noticias.index', compact('noticias'));
    }

    public function create()
    {
        return view('noticias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string',
            'categoria' => 'required|string',
            'descricao' => 'required|string',
            'imagem' => 'required|image:allow_svg|mimes:jpg,jpeg,png,svg|max:8192',
            'paragrafos.*' => 'required|string',
            'anexos.*.tipo' => 'nullable|string',
            'anexos.*.valor' => 'nullable',
        ]);

        // IMAGEM PRINCIPAL
        $path = $request->file('imagem')->store('noticias', 'public_uploads');

        // CRIA NOTÍCIA
        $noticia = Noticia::create([
            'titulo' => $request->titulo,
            'categoria' => $request->categoria,
            'descricao' => $request->descricao,
            'imagem' => $path,
        ]);

        // PARÁGRAFOS
        if ($request->paragrafos) {
            foreach ($request->paragrafos as $ordem => $conteudo) {
                if (!empty($conteudo)) {
                    NoticiaParagrafos::create([
                        'noticia_id' => $noticia->id,
                        'conteudo' => $conteudo,
                        'ordem' => $ordem,
                    ]);
                }
            }
        }

        // ANEXOS
        if ($request->anexos) {
            foreach ($request->anexos as $anexo) {

                // Arquivo físico
                if ($anexo['tipo'] === 'arquivo' && $anexo['valor'] instanceof \Illuminate\Http\UploadedFile) {

                    $uploaded = $anexo['valor'];
                    $path = $uploaded->store('noticia_anexos', 'public_uploads');

                    NoticiaAnexos::create([
                        'noticia_id' => $noticia->id,
                        'tipo' => 'arquivo',
                        'valor' => $path,
                        'titulo' => $anexo['titulo'] ?? null,
                        'nome_original' => $uploaded->getClientOriginalName(),
                    ]);

                } else {

                    // LINK
                    if (!empty($anexo['valor'])) {
                        NoticiaAnexos::create([
                            'noticia_id' => $noticia->id,
                            'tipo' => $anexo['tipo'],
                            'valor' => $anexo['valor'],
                            'titulo' => $anexo['titulo'] ?? null,
                            'nome_original' => null,
                        ]);
                    }
                }
            }
        }

        return redirect()->route('noticias.index')->with('success', 'Notícia criada com sucesso!');
    }

    public function edit(Noticia $noticia)
    {
        $noticia->load('paragrafos', 'anexos');
        return view('noticias.edit', compact('noticia'));
    }

    public function update(Request $request, Noticia $noticia)
    {
        $request->validate([
            'titulo' => 'required|string',
            'categoria' => 'required|string',
            'descricao' => 'required|string',
            'imagem' => 'nullable|image:allow_svg|mimes:jpg,jpeg,png,svg|max:8192',
            'paragrafos.*' => 'required|string',
            'anexos.*.tipo' => 'nullable|string',
            'anexos.*.valor' => 'nullable',
        ]);

        // ATUALIZA IMAGEM PRINCIPAL
        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('noticias', 'public_uploads');
            $noticia->imagem = $path;
        }

        $noticia->update([
            'titulo' => $request->titulo,
            'categoria' => $request->categoria,
            'descricao' => $request->descricao,
        ]);

        // ---- PARÁGRAFOS ----
        $noticia->paragrafos()->delete();

        if ($request->paragrafos) {
            foreach ($request->paragrafos as $ordem => $conteudo) {
                if (!empty($conteudo)) {
                    NoticiaParagrafos::create([
                        'noticia_id' => $noticia->id,
                        'conteudo' => $conteudo,
                        'ordem' => $ordem,
                    ]);
                }
            }
        }

        // ---- ANEXOS ----
        $noticia->anexos()->delete();

        if ($request->anexos) {
            foreach ($request->anexos as $anexo) {

                // UPLOAD DE ARQUIVO
                if ($anexo['tipo'] === 'arquivo' && $anexo['valor'] instanceof \Illuminate\Http\UploadedFile) {

                    $uploaded = $anexo['valor'];
                    $path = $uploaded->store('noticia_anexos', 'public_uploads');

                    NoticiaAnexos::create([
                        'noticia_id' => $noticia->id,
                        'tipo' => 'arquivo',
                        'valor' => $path,
                        'titulo' => $anexo['titulo'] ?? null,
                        'nome_original' => $uploaded->getClientOriginalName(),
                    ]);

                } else {

                    // LINK
                    if (!empty($anexo['valor'])) {
                        NoticiaAnexos::create([
                            'noticia_id' => $noticia->id,
                            'tipo' => $anexo['tipo'],
                            'valor' => $anexo['valor'],
                            'titulo' => $anexo['titulo'] ?? null,
                            'nome_original' => null,
                        ]);
                    }
                }
            }
        }

        return redirect()->route('noticias.index')->with('success', 'Notícia atualizada com sucesso!');
    }

    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        return redirect()->route('noticias.index')->with('success', 'Notícia excluída com sucesso!');
    }

    public function showPublic($slug)
    {
        $noticia = Noticia::where('slug', $slug)->firstOrFail();
        return view('noticias.show', compact('noticia'));
    }

    public function loadMore(Request $request)
    {
        $skip = $request->query('skip', 0);
        $noticias = Noticia::skip($skip)->take(6)->get();

        return view('partials._noticia_card', compact('noticias'))->render();
    }
}
