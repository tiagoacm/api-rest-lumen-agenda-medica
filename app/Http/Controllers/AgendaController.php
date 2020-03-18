<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;
use PDOException;

class AgendaController
{

    public function read(Request $request)
    {    
        try{
            return response()->json(Agenda::with('medico')->get()); 
        }catch(PDOException $e){
            return response()->json(['msg' => 'Problema no banco de dados', 'erro' => $e->getMessage()], 500);
        }
    }

    public function readId(int $id)
    {
        try {
            $agenda = Agenda::find($id);
            if (is_null($agenda)) {
                return response()->json(['msg' => 'Agenda não encontrada'], 204);
            }
            $agenda->medico;
            return response()->json($agenda);
        } catch (PDOException $e) {
            return response()->json(['msg' => 'Problema no banco de dados', 'erro' => $e->getMessage()], 500);
        }
    }

    public function buscaPorMedico(int $medicoId){
        try {     
            $agendas = Agenda::query()
            ->where('medico_id', $medicoId)
            ->get();
            return $agendas;
        } catch (PDOException $e) {
            return response()->json(['msg' => 'Problema no banco de dados', 'erro' => $e->getMessage()], 500);
        }
    }

}
