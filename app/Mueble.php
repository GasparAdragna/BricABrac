<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mueble extends Model
{
  protected $table = "muebles";
  protected $fillable = ['nombre','descripcion', 'cateogrias_id','precio', 'vendido', 'foto'];
  public function categoria()
  {
    return $this->belongsTo(Categoria::class, 'categorias_id');
  }
}
