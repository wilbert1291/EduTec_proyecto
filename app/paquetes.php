<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Paquetes extends Model
    {
        protected $table = 'tbl_paquetes';
        public $timestamps = false;
        protected $primaryKey = 'int_IdPaquete';
        protected $fillable = ['int_IdPaquete', 'vch_NombrePaquete', 'vch_Descripcion', 'vch_Tiempo', 'flt_precio', 'int_descuento', 'vch_imagen'];
    }