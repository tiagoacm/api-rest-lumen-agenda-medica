<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    public $timestamps = false;

    protected $table = 'tb_medico';
    //protected $primaryKey = 'id';

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class, 'ESPECIALIDADE_ID', 'ID');
    }

    public function agenda()
    {
        return $this->hasMany(Agenda::class, 'MEDICO_ID', 'ID');
    }


}
