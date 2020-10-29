<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Cursos extends Model
    {
        protected $table = 'tbl_cursos';
        public $timestamps = false;
        protected $primaryKey = 'int_IdCurso';
        protected $fillable = ['int_IdCurso', 'int_IdCategoria', 'vch_NombreCurso', 'vch_Descripcion'];
    }

