<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $objFornecedor;

    public function __construct()
    {
        $this->objFornecedor = new Fornecedor();
    }
    public function index()
    {
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        
        $fornecedores = Fornecedor::all();
        return view ('fornecedores.listaforne', compact('fornecedores', 'showUser','showProjeto','showProcesso', 'showCronograma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        $fornecedores = Fornecedor::all();
       
        return view('fornecedores.criar', compact('showUser', 'showProjeto', 'showProcesso', 'showCronograma'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cad = $this->objFornecedor->create([
            'tipo_empresa' => $request->tipo_empresa,
            'nome' => $request->nome,
            'cpf_cnpj' => $request->cpf_cnpj,
            'insc_estadual' => $request->insc_estadual,
            'responsavel'  => $request->responsavel,
            'email' => $request->email,
            'cargo' => $request->cargo,
            'telefone' => $request->telefone,
            'banco' => $request->banco,
            'agencia' => $request->agencia,
            'conta' => $request->conta,
            'digito' => $request->digito

        ]);
        if ($cad)
        {
            return redirect('fornecedores');
        }
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {




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
        //
    }
}