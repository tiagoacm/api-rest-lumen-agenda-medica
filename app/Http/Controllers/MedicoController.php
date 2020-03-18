<?php

namespace App\Http\Controllers;

use App\Medico;
use ErrorException;
use Exception;
use Illuminate\Http\Request;
use PDOException;

class MedicoController {

    public function read(Request $request){
        try{
            return response()->json(Medico::with('especialidade')->get()); 
        }catch(PDOException $e){
            return response()->json(['msg' => 'Problema no banco de dados', 'erro' => $e->getMessage()], 500);
        }
        
    }

    public function readId(int $id){
        try{
            $medico = Medico::find($id);
            if(is_null($medico)){
                return response()->json(['msg' => 'Médico não encontrado'], 204);
            }
            $medico->especialidade;
            return response()->json($medico);    
        }catch(PDOException $e){
            return response()->json(['msg' => 'Problema no banco de dados', 'erro' => $e->getMessage()], 500);
        }

    }

    public function buscaPorEspecialidade(int $especialidadeId){
        try{
            $medicos = Medico::query()
            ->where('ESPECIALIDADE_ID', $especialidadeId)
            ->get();
            return $medicos;
        }catch(PDOException $e){
            return response()->json(['msg' => 'Problema no banco de dados', 'erro' => $e->getMessage()], 500);
        }
         
    }



}

?>