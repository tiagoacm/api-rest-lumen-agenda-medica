<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model{
    public $timestamps = false;

    protected $table = 'tb_especialidade';  
    //protected $primaryKey = 'id';  
    
    public function medico(){
        return $this->hasMany(Medico::class, 'ESPECIALIDADE_ID', 'ID');
    }

}