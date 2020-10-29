<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Turnos extends Model
    {
        protected $table = 'tbl_turnos';
        public $timestamps = false;
        protected $primaryKey = 'int_IdTurno';
        protected $fillable = ['int_IdTurno', 'vch_Turno'];
    }