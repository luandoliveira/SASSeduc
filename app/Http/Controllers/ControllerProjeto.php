<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use App\Models\Municipio;
use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Fase;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\Auth;

class ControllerProjeto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    private $objProjeto;
    private $objUser;
    private $objFase;
   

     public function __construct()
    {
        $this->objUser = new User();
        $this->objProjeto = new Projeto();
        $this->objFase = new Fase();
        $this->middleware('can:edit-projeto');
        $this->middleware('auth');

    }

    public function index()
    {   
        $id = Auth::user()->id;
        $users = User::all();
        $fases = Fase::all();
        $projetos = Projeto::all();
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA        
        $x =Projeto::where('projetos.id_user','=', $id)->get(); //Variavel que consulta se o usuario tem projeto

        return view('projetos.projeto', compact('projetos', 'users', 'showUser', 'showProjeto', 'showProcesso', 'showCronograma', 'id', 'x'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipio::all();
        $escolas = Escola::all();
        $users = User::all();
        $projetos = Projeto::all();
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA        
        return view('projetos.criar', compact('municipios', 'projetos', 'users', 'showUser', 'showProjeto', 'showProcesso', 'showCronograma', 'escolas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         /* dd($categoria, $recursos);  */
        //Enviando os dados para a tabela de FASES
   
        $tabela1 = new Projeto();
        $tabela1->sigeam = $request->sigeam;
        $tabela1->municipio = $request->municipio;
        $tabela1->coordenadoria = $request->coordenadoria;
        $tabela1->escola = $request->escola;
        $tabela1->telefone = $request->telefone;
        $tabela1->email = $request->email;
        $tabela1->projeto = $request->projeto;
        $tabela1->gestor = $request->gestor;
        $tabela1->modelo = $request->modelo;
        $tabela1->id_user = $request->id_user;
        $tabela1->solicitante = $request->solicitante;
        $tabela1->valor_ini = $request->valor_ini;
        $tabela1->informante = $request->informante;
        $tabela1->respon_projeto = $request->respon_projeto;
        $tabela1->respon_pelo_projeto = $request->respon_pelo_projeto;
        $tabela1->tipo_projeto = $request->tipo_projeto;
        $tabela1->data = $request->data;
        $tabela1->descricao = $request->descricao;
        $tabela1->executor = $request->executor;
        $tabela1->data_ini = $request->data_ini;
        $tabela1->data_fim = $request->data_fim;
        $tabela1->executor_email = $request->executor_email;
        $tabela1->executor_telefone = $request->executor_telefone;
        $tabela1->executor_atuacao = $request->executor_atuacao;

        $tabela1->categoria = $request->categoria;
        $array2=  $request->recursos;
        $tabela1->recursos_necessarios = implode(',', $array2);
        $tabela1->save();
        //Enviando os dados para a tabela de FASES
        
        $array3=  $request->fase; //Coletando Array do Input de FASE
        $array4=  $request->atividade; //Coletando Array do Input de ATIVIDADE
        /* dd($array4); */
        $aux = count($array3); //Contador do Número de FASES
        for($i=0; $i < $aux; $i++) {
        $tabela2 = new Fase();  //Criando novas linhas no BD
        $tabela2->id_projeto = $tabela1->id; 
        $tabela2->fase = $array3[$i];
        $tabela2->atividade = $array4[$i];
        $tabela2->data_ini = $request->data_ini;
        $tabela2->data_fim = $request->data_fim;
        if (!empty($tabela2->atividade)) {
        $tabela2->save(); //Salvando Campos do Array
        }
    }
        if($tabela1 and $tabela2) {
    
        return redirect('projetos');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
       
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        $projetos= $this->objProjeto->find($id);
       
        

        return view('projetos.show', compact('projetos', 'showUser', 'showProjeto', 'showProcesso', 'showCronograma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        $projetos= $this->objProjeto->find($id);
        $users= $this->objUser->find($id);

        dd($projetos);
        return view('projetos.edit', compact('projetos', 'users', 'showUser', 'showProjeto', 'showProcesso', 'showCronograma'));
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
    public function deletar(Request $request, $id)
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

    }
    public function fase($id)
    {
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        $projetos= $this->objProjeto->find($id);
        $fases = $this->objFase->where($id_projeto = $projetos);
        $fornecedores = Fornecedor::all();
        

        return view('projetos.show', compact('projetos', 'showUser', 'showProjeto', 'showProcesso', 'showCronograma','fases', 'fornecedores'));
    }

    public function editFase (Request $request, $id)
    {
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        $projetos= $this->objProjeto->find($id);

        $fase = $request->fase;
        $ativo = $request->ativo;
        
        $teste = Fase::where(['id'=>$fase])->update([
            'ativo' => $ativo
        ]);
        if ($teste)
        {
            return back();
        }
    }
}