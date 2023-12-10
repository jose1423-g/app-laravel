<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* EL nombre del model eloquent lo interpreta como el nombre de la tabla */
    use HasFactory;

    /* en caso de que el nombre del model no sea el nombre o queramos usar otro nombre podemos utilizar la propiedad protected con la variable $table */
    protected $table = 'contenido';
    protected $primaryKey = 'id_contenido';

    protected $fillable = ['Titulo', 'Que_es'];

    /* por defecto se envian los siguientes campos en eloquoent  updated_at  y created_at*/
    /* esto evita que se envien esos campos */
    public $timestamps = false;

}
