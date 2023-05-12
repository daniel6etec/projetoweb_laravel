<?php

namespace App\Http\Controllers;
use App\Models\agendamentos;

use Illuminate\Http\Request;

class controllerAgendamentos extends Controller
{
    
    public function store(Request $request) {

        $control = new agendamentos();

        $control->nome = $request->txtNome;
        $control->telefone = $request->txtTelefone;
        $control->origem = $request->txtOrigem;
        $control->data_contato = $request->dateContato;
        $control->observacao = $request->txtObservacao;

        $control->save();

        return redirect('/');

    }

    public function consultaragenda(){
        $consulta = new agendamentos();
        return view('consulta', ['agendas' => $consulta->all()]);
    }

    public function Editar($agendas){
        
        $consultar = agendamentos::findOrFail($agendas);

        return view('editar', ['agendas' => $consultar]);

    }

}
