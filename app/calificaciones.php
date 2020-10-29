<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Calificaciones extends Model
    {
        protected $table = 'tbl_calificaciones';
        public $timestamps = false;
        protected $primaryKey = 'int_IdCalificaciones';
        protected $fillable = ['int_IdCalificaciones', 'int_IdCurso', 'int_IdAlumno', 'flt_Calificacion', 'int_Aciertos', 'int_Errores'];
    }

