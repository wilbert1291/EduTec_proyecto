<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Historial_calificaciones extends Model
    {
        protected $table = 'tbl_historial_calificaciones';
        public $timestamps = false;
        protected $primaryKey = 'int_IdHistorialCalificaciones';
        protected $fillable = ['int_IdHistorialCalificaciones', 'int_IdAlumno', 'int_IdCurso', 'flt_Calificacion', 'dt_Fecha'];
    }