<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Sexos extends Model
    {
        protected $table = 'tbl_sexos';
        public $timestamps = false;
        protected $primaryKey = 'int_IdSexo';
        protected $fillable = ['int_IdSexo', 'vch_Sexo'];
    }