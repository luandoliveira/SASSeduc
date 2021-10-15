<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class ControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->objUser = new User();
        $this->middleware('can:edit-users');
        $this->middleware('auth');

    }

    public function index()
    {   
        $users = User::all();
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        
        return view('admin.usuarios', compact('users', 'showUser', 'showProjeto', 'showProcesso', 'showCronograma'));
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
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        $users= $this->objUser->find($id);
        return view('admin.edit', compact('users', 'showUser', 'showProjeto', 'showProcesso', 'showCronograma'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users= $this->objUser->find($id);
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        $projetos= $this->objUser->find($id);
        return view('admin.edit', compact('users', 'showUser', 'showProjeto', 'showProcesso', 'showCronograma'));
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

          User::where(['id'=>$id])->update([
                'name' => $request->name,
                'password' => bcrypt($request->password),
                            

          ]);
          return redirect('admin/usuarios');

    }
    
    public function permissao(Request $request, $id){
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        $users= $this->objUser->find($id);
        
        return view('admin.permissao', compact('users', 'showUser', 'showProjeto', 'showProcesso', 'showCronograma'));
    }
    public function editPermissao(Request $request, $id)
    {   
        //teste para campo de permissão se está vazio ou não
        $permissao = $request->permissao;
        if (empty($permissao)){
            $permissao = 0;
        }
        $projeto = $request->projeto;
        if (empty($projeto)){
            $projeto = 0;
        }
        $processo = $request->processo;
        if (empty($processo)){
            $processo = 0;
        }

        
        $cronograma = $request->cronograma;
        if (empty($cronograma)) {
            $cronograma = 0;
        }
            
        //atualizando informações do banco
        User::where(['id'=>$id])->update([
            'permissao' => $permissao,
            'projeto' => $projeto,
            'processo' => $processo,
            'cronograma' => $cronograma,
                        

      ]);
      return redirect('admin/usuarios');
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