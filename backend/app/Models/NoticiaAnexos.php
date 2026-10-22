<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoticiaAnexos extends Model
{
    protected $fillable = [
        'noticia_id',
        'tipo',
        'valor',
        'titulo',
        'nome_original',
    ];

    public function noticia()
    {
        return $this->belongsTo(Noticia::class);
    }
}
