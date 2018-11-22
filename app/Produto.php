<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	protected $fillable = ['nome','descricao'];

    public function avaliacoes()
    {
        return $this->hasMany('App\AvaliacaoProduto');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
