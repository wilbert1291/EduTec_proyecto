<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Municipios extends Model
    {
        protected $table = 'tbl_municipios';
        public $timestamps = false;
        protected $primaryKey = 'intClvMunicipio';
        protected $fillable = ['intClvMunicipio', 'chrNumMunicipio', 'chrClvEdo', 'vchNomMunicipio'];
    }