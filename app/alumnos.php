<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Alumnos extends Model
    {
        protected $table = 'tbl_alumnos';
        public $timestamps = false;
        protected $primaryKey = 'int_IdAlumno';
        protected $fillable = ['int_IdAlumno', 'int_IdInstitucion', 'int_IdUsuario', 'int_IdProfesor', 'chr_Grupo', 'chr_Semestre'];
    }

