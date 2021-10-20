<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <!-- Teste de Senha e Requisição Ajax -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css">

    <!-- necessario para o modal perfil pegar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <title>SAES Seduc</title>
</head>

<body>
    <!-- ------------------------------------------------------- Menu Opções ---------------------------------------------------------- -->
    <div id="wrapper">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <img id="logo" src="{{asset('img/logonav.png')}}" width="100" height="100" class="dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>
                <hr style="height:1px;border:none;color:#333;background-color:#fff;">
            </div>
            <div id="esconde">
                <a><i><img id="logoicon" style="display:none;margin-left:11px;margin-top:35px;"
                            src="{{asset('img/logonav.png')}}" width="40" height="40"></img></i></a>
            </div>
            <ul class="sidebar-nav">
                <li>
                    <a style="margin-top:80px;" href="{{url('home')}}"><i class="fa fa-home"></i> Página Inicial</a>
                </li>
                @if($showUser)
                <li>
                    <a style="margin-top:15px;" href="#" class="dropdown-btn"><i class="fa fa-user"></i>Usuários<i
                            class="icone fa fa-plus" style="font-size:15px;padding-left:58px;.content.active {display:block;}.content {display:none;}.content.active {display:block;}.content {display:none;}"></i></a>
                    <ul class="dropdown-container">
                        <a href="{{url('admin/usuarios')}}">Lista de Usuários</a>

                    </ul>
                </li>
                <li>
                    <a style="margin-top:15px;" class="dropdown-btn"><i class="fa fa-truck" style=" padding-left:17px;transform: scaleX(-1);"></i>Fornecedores<i
                            class="icone fa fa-plus" style="font-size:15px;padding-left:19px;.content.active {display:block;}.content {display:none;}"></i></a>
                    <ul class="dropdown-container">
                        <a href="{{url('fornecedores/create')}}">Criar Fornecedor</a>
                        <a href="{{url('fornecedores')}}">Listar Fornecedor</a>
                    </ul>
                </li>
                @endif
                @if ($showProjeto)
                <li>
                    <a style="margin-top:15px;" class="dropdown-btn"><i class="fa fa-puzzle-piece"></i>Projetos<i
                            class="icone fa fa-plus" style="font-size:15px;padding-left:62px;.content.active {display:block;}.content {display:none;}"></i></a>
                    <ul class="dropdown-container">
                        <a href="{{url('projetos/create')}}">Criar Projeto</a>
                        <a href="{{url('projetos')}}">Lista de Projetos</a>
                    </ul>
                </li>
                @endif

                @if ($showProcesso)
                <li>
                    <a style="margin-top:15px;" class="dropdown-btn"><i class="fa fa-cogs"></i>Processos<i
                            class="icone fa fa-plus" style="font-size:15px;padding-left:50px;.content.active {display:block;}.content {display:none;}"></i></a>
                    <ul class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>

                    </ul>
                </li>
                @endif
                @if ($showCronograma)
                <li>
                    <a style="margin-top:15px;" class="dropdown-btn"><i class="fa fa-calendar"></i>Cronogramas<i
                            class="icone fa fa-plus" style="font-size:15px;padding-left:20px;.content.active {display:block;}.content {display:none;}"></i></a>
                    <ul class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </ul>
                </li>
                @endif
                <!-- <ul style="margin-top:590px;margin-left:25px;color:#fff">Versao 1.9</ul> -->
                </li>
            </ul>


        </aside>


        <!-- ------------------------------------------------------- nav --------------------------------------------------------------- -->
        <div id="navbar-wrapper">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand" id="sidebar-toggle" onclick="Mudarestado('logoicon')"><i
                                class="fa fa-bars"></i></a>
                    </div>
                    <div>
                        <div class="btn-group">
                            @if (auth()->user()->avatar != null)
                            <img class="rounded-pill img-fluid" width="38" src="{{auth()->user()->avatar}}"
                                class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"></img>
                            @else
                            <img src="{{asset('img/usuario.png')}}" width="35" height="32" class="dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>
                            @endif
                            <div style="padding-top:2px;padding-left:5px;" class="text-decoration-none"
                                data-toggle="dropdown" id="nomeuser">
                                <h5 style="color:#fff">{{auth()->user()->name}}</h5>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Perfil
                                </button>
                                <button class="dropdown-item" type="button" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</button>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <!-- <button class="dropdown-item" type="button">Algo mais aqui</button> -->
                            </div>
                        </div>
                    </div>
                </div>

            </nav>

        </div>
        <!-- ------------------------------------------------------- fim nav ---------------------------------------------------------- -->
        <div id=cabecalho>
            <h4>Administrativo</h4>
        </div>
        <div id="lista">
            <div class="row">
                <!-- <table id="example" class="table table-striped" style="width:100%;background-color:#fff;"> -->
                <div class="card">
                    <div class="card-header">
                        Lista de usuários
                    </div>
                    <div class="table-responsive  table-sm">
                        <table id="example" class="table table-striped table-bordered"
                            style="width:100%;background-color:#fff;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Matrícula</th>
                                    <th>CPF</th>
                                    <th>E-mail</th>
                                    <th>Fone</th>
                                    <th>Lotação</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $usuarios)
                                <tr>
                                    <td>{{$usuarios->id}}</td>
                                    <td>{{$usuarios->name}}</td>
                                    <td>{{$usuarios->matricula}}</td>
                                    <td>{{$usuarios->cpf}}</td>
                                    <td>{{$usuarios->email}}</td>
                                    <td>{{$usuarios->telefone}}</td>
                                    <td>{{$usuarios->lotacao}}</td>
                                    <td>
                                        <a style="padding-left:10px;"
                                            href="{{url("admin/usuarios/$usuarios->id/edit")}}">
                                            <button class="btn btn-success">Editar</button>
                                        </a>
                                        <a href="{{url("admin/usuarios-permissao/$usuarios->id")}}">
                                            <button class="btn btn-danger">Permitir</button>
                                        </a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                            <!-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------------------------------Inicio do menu perfil --------------------------------------------------------------------- -->
        <div class="container demo">
            <div class="modal right fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2e75b6">
                            <h5 class="modal-title" style="color:#fff">Perfil</h5>
                            @if (auth()->user()->avatar != null)
                            <img class="rounded-pill img-fluid" width="38" src="{{auth()->user()->avatar}}"
                                class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"></img>
                            @else
                            <img src="{{asset('img/usuario.png')}}" width="32" height="32"
                                style="margin-top:2px;margin-left:5px;"></img>
                            @endif
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                style="color:#fff">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- corpo do modal -->
                        <div class="modal-body">
                            <div class=" d-none alert alert-success" id="success" role="success"></div>
                            <!-- Alerta para dados editados -->
                            <div class="d-none alert alert-danger" id="error" role="alert"></div>
                            <!-- Alerta para erro ao editar -->
                            <div class="d-none alert alert-danger" id="senha" role="alert">As senhas não são idênticas!
                            </div>

                            <form class="needs-validation" name="formEdit" novalidate>
                                @csrf
                                <div class="form-group">
                                    <div class="col-md-12 mb-6">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="First name" value="{{auth()->user()->name}}" required>
                                    </div>
                                </div>


                                <div class="form-group">

                                    <div class="col-md-12 mb-6">
                                        <label for="validationCustomUsername">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                            </div>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Username" aria-describedby="inputGroupPrepend"
                                                value="{{auth()->user()->email}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-md-12 mb-6">
                                        <label for="validationCustomUsername">Senha</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <!-- <span class="input-group-text" id="inputGroupPrepend">*</span> -->
                                            </div>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password" name="password" placeholder="Senha" required
                                                autocomplete="current-password">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-6">
                                        <label for="validationCustomUsername">Confirmar Senha</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <!-- <span class="input-group-text" id="inputGroupPrepend">*</span> -->
                                            </div>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password_confirmation" id="confirm-password"
                                                placeholder="Confirmar Senha" required autocomplete="current-password">
                                        </div>
                                    </div>
                                </div>


                                <div class="modal-footer form-group">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container -->

        </div>
        <!-- ---------------------------------fim do menu perfil --------------------------------------------------------------------- -->



        <!-- <footer class="text-center">

<div class="text-center p-3" id="contfooter">
  Copyright © 2021.
  <a >Seduc-AM. Todos os Direitos Reservados</a>
</div>

</footer> -->


</body>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        }
    });
});
</script>
<!-- Scripts do ajax -->

<script>
$(function() {
    $('form[name="formEdit"]').submit(function(event) {
        event.preventDefault();
        /* Validar Senhas */
        NovaSenha = document.getElementById('password').value;
        CNovaSenha = document.getElementById('confirm-password').value;
        if (NovaSenha != CNovaSenha) {
            setTimeout(function() {
                $('#senha').removeClass('d-none').fadeOut(5000, function() {
                    $('#senha').alert('close');
                });
            });

        } else {
            $.ajax({
                url: "{{route('profile.update')}}",
                type: "post",
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    console.log(response);

                    if (response.success === true) {
                        //redirecionar
                        setTimeout(function() {
                            $('#success').removeClass('d-none').html(response
                                .message).fadeOut(5000, function() {
                                $('#success').alert('close');
                            });
                        });

                    } else {
                        setTimeout(function() {
                            $('#error').removeClass('d-none').html(response.message)
                                .fadeOut(5000, function() {
                                    $('#error').alert('close');
                                });
                        });
                    }
                }
            });
        }


        /* action="{{route('profile.update')}}" method="POST" */
    });
});
</script>

<!-- Script para trocar o icon + para - ao clicar -->
<script>
  $('a').click(function() {
  $(this).find('.icone').toggleClass('fa-minus fa-plus');
  $('.content').toggleClass('active');
});
</script>

<style>
#lista {
    margin-top: 30px;
    padding-right: 10px;
    padding-left: 10px;
    margin-left: 60px;
    margin-right: 60px;
}

.trans {
    transition: all 0.5s ease;
}

#contfooter {
    color: #2e75b6;
    background-color: #DFECF7;
}

#home {
    margin-top: 60px;
}

.dropdown-container {
    display: none;
    padding-left: 60px;
}

body {
    padding-bottom: 0px;
    position: relative;
    min-height: 100%;
}

a {
    transition: background 0.2s, color 0.2s;
}

a:hover,
a:focus {
    text-decoration: none;
}

#wrapper {
    padding-left: 0;
    /* transition: all 0.5s ease; */
    position: relative;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    overflow-x: hidden;
    background: linear-gradient(#2E75B6, #1A4E7D);
    /* body do menu  */
    /* transition: all 0.5s ease; */
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

.sidebar-brand {
    position: absolute;
    top: 0;
    width: 250px;
    text-align: center;
    padding-top: 6px;
}

.sidebar-brand h2 {
    margin: 0;
    font-weight: 600;
    font-size: 24px;
    color: #fff;
}

.sidebar-nav {
    position: absolute;
    top: 75px;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav>li {
    text-indent: 10px;
    line-height: 42px;
}

.sidebar-nav>li a {
    display: block;
    text-decoration: none;
    color: #fff;
    font-weight: 600;
    font-size: 18px;
}

.sidebar-nav>li>a:hover,
.sidebar-nav>li.active>a {
    text-decoration: none;
    color: #fff;
    background: #537777;
    /* cor de selecao menu*/
}

.sidebar-nav>li>a i.fa {
    font-size: 24px;
    width: 60px;
}

#navbar-wrapper {
    width: 100%;
    position: absolute;
    z-index: 2;
}

#wrapper.toggled #navbar-wrapper {
    position: absolute;
    margin-right: -250px;
}

#navbar-wrapper .navbar {
    border-width: 0 0 0 0;
    background: linear-gradient(to right, #2E75B6, #4BA8EF);
    /*cor do cabeçalho*/
    font-size: 24px;
    margin-bottom: 0;
    border-radius: 0;
}

#navbar-wrapper .navbar a {
    color: #fff;
}

#navbar-wrapper .navbar a:hover {
    /* cor dos 3 pontinhos menu */
    color: #525252;
}

#content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
    top: 100px;
}

#wrapper.toggled #content-wrapper {
    position: absolute;
    margin-right: -250px;
}

@media (min-width: 992px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 60px;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 60px;
    }

    #wrapper.toggled #navbar-wrapper {
        position: absolute;
        margin-right: -190px;
    }

    #wrapper.toggled #content-wrapper {
        position: absolute;
        margin-right: -190px;
    }

    #navbar-wrapper {
        position: relative;
    }

    #wrapper.toggled {
        padding-left: 60px;
    }

    #content-wrapper {
        position: relative;
        top: 0;
    }

    #wrapper.toggled #navbar-wrapper,
    #wrapper.toggled #content-wrapper {
        position: relative;
        margin-right: 60px;
    }
}

#cabecalho {
    padding-top: 15px;
    padding-bottom: 15px;
    background: linear-gradient(to right, #00b050, #00b050c7);
    color: #fff;
    padding-left: 45%;
    padding-right: 50%;
}

@media (min-width: 768px) and (max-width: 991px) {
    #wrapper {
        padding-left: 60px;
    }

    #sidebar-wrapper {
        width: 60px;
    }

    #wrapper.toggled #navbar-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    #wrapper.toggled #content-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    #navbar-wrapper {
        position: relative;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #content-wrapper {
        position: relative;
        top: 0;
    }

    #wrapper.toggled #navbar-wrapper,
    #wrapper.toggled #content-wrapper {
        position: relative;
        margin-right: 250px;
    }
}

@media (max-width: 767px) {
    #cabecalho {
        padding-top: 15px;
        padding-bottom: 15px;
        background: linear-gradient(to right, #00b050, #2bbd6d);
        color: #fff;
        padding-left: 30%;
    }

    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        overflow-x: hidden;
        background: linear-gradient(#2E75B6, #1A4E7D);
        /* body do menu  */
        transition: all 0.5s ease;
    }

    #nomeuser {
        display: none;
    }

    .container-fluid {
        padding-left: 0px;
        padding-right: 0px;
    }

    #esconde {
        display: none !important;
    }

    #wrapper {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 0;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #navbar-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    #wrapper.toggled #content-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    #navbar-wrapper {
        position: relative;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #content-wrapper {
        position: relative;
        top: 0;
    }

    #wrapper.toggled #navbar-wrapper,
    #wrapper.toggled #content-wrapper {
        position: relative;
        margin-right: 250px;
    }
}

/* css MODAL PERFIL */
.modal.right .modal-dialog {
    position: fixed;
    margin: auto;
    width: 320px;
    /* tamanho do modal */
    height: 100%;
    -webkit-transform: translate3d(0%, 0, 0);
    -ms-transform: translate3d(0%, 0, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0);
}

.modal.right .modal-content {
    height: 100%;
    overflow-y: auto;
}

.modal.right .modal-body {
    padding: 15px 15px 80px;
}

/* fecha o modal */
.modal.right.fade .modal-dialog {
    right: -320px;
    -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
    -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
    -o-transition: opacity 0.3s linear, right 0.3s ease-out;
    transition: opacity 0.3s linear, right 0.3s ease-out;
}

/* abre o modal */
.modal.right.fade.show .modal-dialog {
    right: 0;
    -webkit-box-shadow: -9px 0px 25px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: -9px 0px 25px 0px rgba(0, 0, 0, 0.3);
    box-shadow: -9px 0px 25px 0px rgba(0, 0, 0, 0.3);
}

/* ----- MODAL STYLE ----- */
.modal-content {
    border-radius: 0;
    border: none;
}

.modal-header {
    border-bottom-color: #EEEEEE;
    background-color: #FAFAFA;
}

/* ----- v CAN BE DELETED v ----- */
.demo {
    padding-top: 60px;
    padding-bottom: 110px;
}

.btn-demo {
    margin: 15px;
    padding: 10px 15px;
    border-radius: 0;
    font-size: 16px;
    background-color: #FFFFFF;
}

.btn-demo:focus {
    outline: 0;
}

.modal-backdrop {
    background-color: #fff;
}

.modal-backdrop.show {
    opacity: .6;
}

.trans {
    transition: all 0.5s ease;
}
</style>
<!-- mostrar  menu -->
<script>
const $button = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper');

$button.addEventListener('click', (e) => {
    e.preventDefault();
    $wrapper.classList.toggle('toggled');
});
</script>


<!-- mostrar o icone ao fechar menu -->
<script>
function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    var botao = document.getElementById('#sidebar-toggle');
    console.log(display);
    if (display == "none") {
        document.getElementById(el).style.display = 'block';

    } else {
        document.getElementById(el).style.display = 'none';

    }
}
</script>
<script>
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-green", "");
    }
}

function myDropFunc() {
    var x = document.getElementById("demoDrop");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-green", "");
    }
}
</script>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}
</script>
<!-- funcao de transicao do menu -->
<script>
let menu = document.querySelector('#sidebar-wrapper')
let menuButton = document.querySelector('#sidebar-toggle')
console.log(menuButton);
// 
menuButton.addEventListener('click', function() {
    let menuIsClosed = !menu.classList.contains('trans')

    if (menuIsClosed) {
        menu.classList.add('trans')
        // console.log('entrei')
    } else if (!menuIsClosed) {
        menu.classList.remove('trans')
        // console.log('entrei2')
    }
})
</script>

</html>