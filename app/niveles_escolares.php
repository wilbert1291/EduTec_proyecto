<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Niveles_escolares extends Model
    {
        protected $table = 'tbl_niveles_escolares';
        public $timestamps = false;
        protected $primaryKey = 'int_IdNivelEscolar';
        protected $fillable = ['int_IdNivelEscolar', 'vch_NombreNivelEscolar', 'bit_Activo'];
    }