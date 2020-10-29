<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Empleados extends Model
    {
        protected $table = 'tbl_empleados';
        public $timestamps = false;
        protected $primaryKey = 'int_IdEmpleado';
        protected $fillable = ['int_IdEmpleado', 'vch_fotografia', 'int_IdUsuario', 'vch_descripcion'];
    }

