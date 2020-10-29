<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Localidades extends Model
    {
        protected $table = 'tbl_localidades';
        public $timestamps = false;
        protected $primaryKey = 'intClvLocalidad';
        protected $fillable = ['intClvLocalidad', 'chrClvEdo', 'chrClvMunicipio', 'chrClvLocalidad', 'vchNomLocalidad'];
    }