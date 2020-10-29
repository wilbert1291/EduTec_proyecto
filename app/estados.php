<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Estados extends Model
    {
        protected $table = 'tbl_estados';
        public $timestamps = false;
        protected $primaryKey = 'chrClvEdo';
        protected $fillable = ['chrClvEdo', 'vchNomEstado'];
    }