<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Gate; //Importante para verificar se é ADMIN
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
  
    }
        
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $showUser = Gate::allows('edit-users'); //verificando se é ADMIN
        $showProjeto = Gate::allows('edit-projeto'); //Verificando permissão PROJETO
        $showProcesso = Gate::allows('edit-processo'); //Verificando permissão PROCESSO
        $showCronograma = Gate::allows('edit-cronograma'); //Verificando permissão CRONOGRAMA
        return view('home', compact('showUser', 'showProjeto', 'showProcesso', 'showCronograma'));
    }
        
}
