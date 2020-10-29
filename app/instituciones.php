<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Instituciones extends Model
    {
        protected $table = 'tbl_instituciones';
        public $timestamps = false;
        protected $primaryKey = 'int_IdInstitucion';
        protected $fillable = ['int_IdInstitucion','int_IdEstado', 'int_IdMunicipio', 'int_IdLocalidad', 'int_IdNivelEscolar', 'int_IdTurno', 'vch_NombreInstitucion', 'vch_Calle', 'vch_Colonia', 'vch_CodigoPostal', 'dt_FechaRegistro', 'vch_ClaveInstitucional', 'vch_Contrasenia', 'vch_Correo', 'bit_Activo'];
    }