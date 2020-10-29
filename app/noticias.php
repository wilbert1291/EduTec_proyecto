<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Noticias extends Model
    {
        protected $table = 'tbl_noticias';
        public $timestamps = false;
        protected $primaryKey = 'int_IdNoticias';
        protected $fillable = ['int_IdNoticia', 'vch_Titulo', 'vch_Contenido', 'vch_Imagen'];
    }