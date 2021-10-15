@extends('templates.navtemplate')

@section('content')

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 p-4">
                <div>
                <div class=" d-none alert alert-success" id="success" role="success"></div>
                            <!-- Alerta para dados editados -->
                            <div class="d-none alert alert-danger" id="error" role="alert"></div>
                            <!-- Alerta para erro ao editar -->
                            <div class="d-none alert alert-danger" id="senha" role="alert">As senhas não são idênticas!</div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Editar Usuário
                    </div>
                    <div class="card-body">
                        <form method="POST" id="formEdit" action="{{url("admin/usuarios/$users->id")}}">
                        @csrf
                        @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="inputEmail4">* Nome</label>
                                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Nome"
                                        value="{{$users->name ?? ''}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">* E-mail </label>
                                    <input type="email" class="form-control" id="inputEmail"
                                        placeholder="email@seduc.net" value="{{$users->email ?? ''}}" readonly required>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="inputCity">Senha</label>
                                    <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password" name="password" placeholder="Senha"
                                                autocomplete="current-password">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="inputZip">Confirmar Senha</label>
                                    <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password_confirmation" id="confirm-password"
                                                placeholder="Confirmar Senha" autocomplete="current-password">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="inputAddress">Matrícula</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Matrícula">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="inputAddress2">CPF</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="000.000.000-00">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="inputCity">Lotação</label>
                                    <input type="text" class="form-control" id="inputCity"
                                        placeholder="Escola Estadual...">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="inputZip">Fone</label>
                                    <input type="text" class=" form-control" id="inputZip"
                                        placeholder="(92) 99999-9999">
                                </div>
                                <div id="botoes" class="form-group col-12 ">
                                    <button href="{{url('admin/usuarios')}}" type="submit" class="btn btn-danger">Voltar</button>
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>




<style>
/* Button pen styles imported */
/* -------------- */
/* Form */
/* .form-control, .form-check-input {
  border-radius: 0;
} */
.form-control:focus {
    border-color: #008000;
    box-shadow: unset;
}
.container {
    margin-top: 150px;
}
body {
    background-color: #ECF4FA;
}
#botoes {
    /* padding-left: 420px; */
    margin-top: 50px;
    padding-left:40%;
    padding-right:35%;
}
@media (max-width: 994px) {
    #botoes {
     margin-top: 50px;
    padding-left:0px;
}
}
</style>
@endsection