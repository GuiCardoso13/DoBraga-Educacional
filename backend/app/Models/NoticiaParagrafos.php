<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoticiaParagrafos extends Model
{
    protected $fillable = [
        'noticia_id',
        'conteudo',
        'ordem',
    ];

    public function noticia()
    {
        return $this->belongsTo(Noticia::class);
    }
}
