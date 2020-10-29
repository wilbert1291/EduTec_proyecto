<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Tipo_usuarios extends Model
    {
        protected $table = 'tbl_tipo_usuarios';
        public $timestamps = false;
        protected $primaryKey = 'int_IdTipoUsuario';
        protected $fillable = ['int_IdTipoUsuario', 'vch_TipoUsuario'];
    }