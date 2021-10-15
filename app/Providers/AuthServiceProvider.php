<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Projeto;

class AuthServiceProvider extends ServiceProvider
{


    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $projeto = Projeto::all();
        $this->registerPolicies();
        //Permissão Administrador para ver lista de usuários e editar
        Gate::define('edit-users', function($user) {
            return $user->permissao === 1;
        });
        //Permissão para ver Projetos
        Gate::define('edit-projeto', function($user) {
            return $user->projeto === 1;
        });
        //Permissão para ver Processos
        Gate::define('edit-processo', function($user) {
            return $user->processo === 1;
        });
        //Permissão para ver Cronogramas
        Gate::define('edit-cronograma', function($user) {
            return $user->cronograma === 1;
        });
        
    }
    }

