<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Pagos extends Model
    {
        protected $table = 'tbl_pagos';
        public $timestamps = false;
        protected $primaryKey = 'int_IdPago';
        protected $fillable = ['int_IdPago', 'int_IdInstitucion', 'int_IdPaquete', 'int_IdMetodoPago', 'dt_FechaInicio', 'dt_FechaFinal'];
    }