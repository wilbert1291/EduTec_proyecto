<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Noticias extends Model
    {
        protected $table = 'tbl_usuarios';
        public $timestamps = false;
        protected $primaryKey = 'int_IdUsuario';
        protected $fillable = ['int_IdUsuario', 'Luego agrego lo demas xD'];
    }