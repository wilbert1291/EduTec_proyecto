<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Profesores extends Model
    {
        protected $table = 'tbl_profesores';
        public $timestamps = false;
        protected $primaryKey = 'int_IdProfesor';
        protected $fillable = ['int_IdProfesor', 'int_IdInstitucion', 'int_IdUsuario'];
    }