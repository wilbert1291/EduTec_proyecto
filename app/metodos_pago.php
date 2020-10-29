<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Metodos_pago extends Model
    {
        protected $table = 'tbl_metodos_pago';
        public $timestamps = false;
        protected $primaryKey = 'int_IdMetodoPago';
        protected $fillable = ['int_IdMetodoPago', 'vch_MetodoPago'];
    }