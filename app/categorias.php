<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Categorias extends Model
    {
        protected $table = 'tbl_categorias';
        public $timestamps = false;
        protected $primaryKey = 'int_IdCategoria';
        protected $fillable = ['int_IdCategoria','vch_NombreCategoria', 'bit_Activo', 'vch_Imagen'];
    }

