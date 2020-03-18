<?php

namespace App\Http\Controllers;

use App\Especialidade;
use Illuminate\Http\Request;
use PDOException;

class EspecialidadeController {

    public function read(Request $request){
        try{
            return Especialidade::all();
        }catch(PDOException $e){
            return response()->json(['msg' => 'Problema no banco de dados', 'erro' => $e->getMessage()], 500);
        }
    }

    public function readId(int $id){
        try{
            $especialidade = Especialidade::find($id);
            if(is_null($especialidade)){
                return response()->json(['msg' => 'Especialidade não encontrada'], 204);
            }
            return response()->json($especialidade);    
        }catch(PDOException $e){
            return response()->json(['msg' => 'Problema no banco de dados', 'erro' => $e->getMessage()], 500);
        }
    }


}

?>