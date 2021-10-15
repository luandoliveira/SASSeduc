<?php

namespace App\Http\Controllers;

use App\Models\Fase;
use Illuminate\Http\Request;
use App\Models\Projeto;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class ControllerFase extends Controller
{
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->objProjeto = new Projeto();
        $this->objFase = new Fase();
        $this->middleware('can:edit-projeto');
        $this->middleware('auth');

    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
/*         $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        $projetos= $this->objProjeto->find($id);
        $fases = $this->objFase->all();

        return view('projetos.show', compact('projetos', 'showUser', 'showProjeto', 'showProcesso', 'showCronograma','fases')); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del =  $this->objFase->destroy($id);
       return($del)?"sim":"não";
    }
}
