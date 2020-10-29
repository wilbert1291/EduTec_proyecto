<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Preguntas_respuestas extends Model
    {
        protected $table = 'tbl_preguntas_respuestas';
        public $timestamps = false;
        protected $primaryKey = 'int_IdPregunta';
        protected $fillable = ['int_IdPregunta', 'int_IdCurso', 'vch_Pregunta', 'vch_Resp1', 'vch_Resp2', 'vch_Resp3', 'vch_Resp4', 'vch_RespuestaCorrecta'];
    }