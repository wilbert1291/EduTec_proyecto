<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Historial_pagos extends Model
    {
        protected $table = 'tbl_historial_pagos';
        public $timestamps = false;
        protected $primaryKey = 'int_IdHistorialPago';
        protected $fillable = ['int_IdHistorialPago', 'int_IdInstitucion', 'int_IdMetodoPago', 'int_IdPaquete', 'dt_FechaPago', 'dt_FechaExpiracion'];
    }