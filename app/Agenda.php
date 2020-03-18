<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    public $timestamps = false;

    protected $table = 'tb_agenda';
    //protected $primaryKey = 'id_agenda';

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'MEDICO_ID', 'ID');
    }


}
