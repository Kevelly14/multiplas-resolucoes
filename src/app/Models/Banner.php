<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 


Class Banner extends Model{
   
    protected $table = 'tbl_banner';
    protected $primaryKey = 'id_banner';

    public $timestamps = false;

    protected $fillable = [
        'imagem_banner',
        'titulo_banner',
        'subtitulo_banner',
        'status_banner',
    ];




}