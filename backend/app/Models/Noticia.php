<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Noticia extends Model
{
    protected $fillable = [
        'titulo',
        'categoria',
        'descricao',
        'imagem',
        'slug',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($noticia) {
            $noticia->slug = \Illuminate\Support\Str::slug($noticia->titulo);

        });

        static::updating(function ($noticia) {
            $noticia->slug = \Illuminate\Support\Str::slug($noticia->titulo);
        });
    }

    public function paragrafos()
    {
        return $this->hasMany(NoticiaParagrafos::class)->orderBy('ordem');
    }

    public function anexos()
    {
        return $this->hasMany(NoticiaAnexos::class);
    }
}
