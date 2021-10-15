@extends('templates.navtemplate')
@section('content')
<!-- <div id= cabecalho><h4></h4></div> -->
<!-- ---------------------------CARDS ------------------------------------- -->
<main>
    <nav class="form-steps">
        <div class="form-steps__item step-1 form-steps__item--completed">
            <div class="form-steps__item-content">
                <span class="form-steps__item-icon" style="width:45px;height:45px;"><i class="fa fa-file-text-o"
                        aria-hidden="true"></i></span>
                <span class="form-steps__item-text">PASSO 1</span>
            </div>

        </div>

        <div class="form-steps__item step-2">
            <div class="form-steps__item-content">
                <span class="form-steps__item-icon"><i class="fa fa-sitemap" aria-hidden="true"></i></span>
                <span class="form-steps__item-line"></span>
                <span class="form-steps__item-text">PASSO 2</span>
            </div>
        </div>

        <div class="form-steps__item step-3">
            <div class="form-steps__item-content">
                <span class="form-steps__item-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                <span class="form-steps__item-line"></span>
                <span class="form-steps__item-text">PASSO 3</span>
            </div>
        </div>

        <div class="form-steps__item step-4">
            <div class="form-steps__item-content">
                <span class="form-steps__item-icon"><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                <span class="form-steps__item-line"></span>
                <span class="form-steps__item-text">PASSO 4</span>
            </div>
        </div>

        <div class="form-steps__item step-5">
            <div class="form-steps__item-content">
                <span class="form-steps__item-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                <span class="form-steps__item-line"></span>
                <span class="form-steps__item-text">PASSO 5</span>
            </div>
        </div>
    </nav>

    <div class="container">
        <form name="formCad" method="post" action="{{url('projetos')}}" enctype="multipart/form-data"
            id="raq_questions">
            @csrf


            <div class="question-container  active_panel" id="question-1">

                <div class="title">Identificação do Projeto</div>

                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Municipio</label>
                                <select type="text" name="municipio" class="form-control" id="municipio"
                                    placeholder="Município">
                                    <option selected>Municípios</option>
                                    @foreach ($municipios as $municipio)
                                    <option value="{{$municipio->municipio}}">{{$municipio->municipio}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Coordenadoria</label>
                                <select type="text" class="form-control" name="coordenadoria" id="coordenadoria"
                                    placeholder="Coordenadoria">
                                    <option selected>Escolha a Coordenadoria</option>
                                    <option value="CDE-01">CDE-01</option>
                                    <option value="CDE-02">CDE-02</option>
                                    <option value="CDE-03">CDE-03</option>
                                    <option value="CDE-04">CDE-04</option>
                                    <option value="CDE-05">CDE-05</option>
                                    <option value="CDE-06">CDE-06</option>
                                    <option value="CDE-0">CDE-07</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-bottom:10px;">Escola</label>
                                <select type="text" class="form-control" id="escola" name="escola" placeholder="Escola">
                                    <option selected>Escolha a Escola</option>
                                    @foreach ($escolas as $escola)
                                    <option value="{{$escola->escola}}">{{$escola->escola}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Codigo Sigeam</label>
                                <input type="text" class="form-control" name="sigeam" id="sigeam"
                                    placeholder="Codigo Sigeam">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-4">
                                <label for="inputPassword4">Gestor</label>
                                <input type="text" class="form-control" name="gestor" id="gestor" placeholder="Gestor">
                            </div>
                            <div class="col">
                                <label for="inputPassword4" style="padding-bottom:10px;">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                            </div>
                            <div class="col">
                                <label for="inputPassword4">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone"
                                    placeholder="Fone">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------ Passo 2 -------------------------------------------------------- -->

            <div class="question-container" id="question-2">
                <div class="title">Dados do Projeto</div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nome do Projeto</label>
                                <input type="text" class="form-control" name="projeto" id="projeto"
                                    placeholder="Ex. 5S em laboratórios">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-bottom:10px;">Modelo</label>
                                <select class="custom-select" id="modelo" name="modelo">
                                    <option selected>Escolha</option>
                                    <option value="Infraestrutura">Infraestrutura</option>
                                    <option value="Aquisição">Aquisição</option>
                                    <option value="Implementação">Implementação</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-4">
                                <label for="inputPassword4" style="padding-bottom:10px;">Solicitante</label>
                                <input type="text" name="solicitante" value="{{auth()->user()->name}}" id="solicitante"
                                    style="display: none;">
                                <select class="custom-select" id="id_user" name="id_user">
                                    <option selected>Solicitante</option>
                                    <option value="{{auth()->user()->id}}">{{auth()->user()->name}}</option>
                            </div>
                            <div class="col">
                                <label for="inputPassword4">Valor Inicial</label>
                                <input type="text" class="form-control" name="valor_ini" id="valor_ini"
                                    placeholder="R$ 0,00">
                            </div>
                            <div class="col">
                                <label for="inputPassword4">Informar</label>
                                <input type="text" class="form-control" name="informante" id="informante"
                                    placeholder="Informe a">
                            </div>
                        </div>

                    </div>
                </div>
                <div style="padding-top:10px;" class="title">Parte Interessada</div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-bottom:10px;">Responsável do projeto</label>
                                <select class="custom-select" id="respon_projeto" name="respon_projeto">
                                    <option selected>Escolha</option>
                                    <option value="Moisés Oliveira">Moisés Oliveira</option>
                                    <option value="Luan de Oliveira">Luan de Oliveira</option>
                                    <option value="Nadiele Praia">Nadiel Praia</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-bottom:10px;">Tipo do Projeto</label>
                                <select class="custom-select" id="tipo_projeto" name="tipo_projeto">
                                    <option selected>Escolha</option>
                                    <option value="Moisés Oliveira">Manutenção</option>
                                    <option value="Luan de Oliveira">Aquisição de Equipamentos</option>
                                    <option value="Nadiele Praia">Construção de Laboratório de Informática</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-bottom:10px;">Responsável pelo projeto</label>
                                <select class="custom-select" id="respon_pelo_projeto" name="respon_pelo_projeto">
                                    <option selected>Escolha</option>
                                    <option value="Moisés Oliveira">Moisés Oliveira</option>
                                    <option value="Luan de Oliveira">Luan de Oliveira</option>
                                    <option value="Nadiele Praia">Nadiel Praia</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" style="padding-bottom:10px;">Data</label>
                                <input type="date" class="form-control" id="data" name="data" placeholder="Data">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ------------------------------------------------PASSO 3-------------------------------------------------- -->
            <div class="question-container " id="question-3">

                <div class="title">Plano de ação</div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Descreva a necessidade</label>
                                <textarea placeholder="Descreva aqui" id="descricao" name="descricao"
                                    style="height:150px;" class="form-control" maxlength="1000" required></textarea>
                                <div id="divFile" style="padding-left:82%;" class="file btn btn-lg btn">
                                    <i class="fa fa-folder-open" aria-hidden="true"
                                        style="padding-right:10px;color:#2185d0;"></i>Anexar arquivos
                                    <input id="inputFile" type="file" name="anexo[]" multiple />
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="form-row">
                            <div class="col-4">
                                <label for="inputPassword4">Executor</label>
                                <input type="text" class="form-control" id="executor" name="executor"
                                    placeholder="Executor">
                            </div>
                            <div class="col">
                                <label for="inputPassword4">E-mail</label>
                                <input type="text" class="form-control" id="executor_email" name="executor_email"
                                    placeholder="E-mail">
                            </div>
                            <div class="col">
                                <label for="inputPassword4">Telefone</label>
                                <input type="text" class="form-control" id="executor_telefone" name="executor_telefone"
                                    placeholder="Fone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-top:10px;">Área de atuaçãoo</label>
                                <select class="custom-select" id="executor_atuacao" name="executor_atuacao">
                                    <option selected>Escolha</option>
                                    <option value="Gerente GESI">Gerente GESI</option>
                                    <option value="Desenvolvedor(a)">Desenvolvedor(a)</option>
                                    <option value="Engenheiro(a)">Engenheiro(a)</option>
                                </select>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!-- ------------------------------------------------PASSO 4 ------------------------------------------------ -->
            <div class="question-container  " id="question-4">
                <div class="title">Plano de ação</div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Inicio</label>
                                <input type="date" class="form-control" id="data_ini" name="data_ini">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Termino</label>
                                <input type="date" class="form-control" id="data_fim" name="data_fim">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="IdCategoria" style="padding-top:10px;">Categoria</label>
                                <select class="custom-select" id="IdCategoria" name="categoria">
                                    <option selected>Selecione</option>
                                    <option value="Categoria 1">Categoria 1</option>
                                    <option value="Categoria 2">Categoria 2</option>
                                    <option value="Categoria 3">Categoria 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <div id="dynamicDiv" style="display:none;">

                                    <p>
                                        <label for="inputeste" style="padding-top:10px;">Recursos Necessários</label>

                                        <a href="javascript:void(0)" id="addInput">
                                            <i class="fa fa-plus-circle" aria-hidden="true" data-toggle="tooltip"
                                                data-placement="left" title="Adicionar" style="font-size:30px;"></i></a>
                                        <select class="custom-select" id="inputeste">
                                            <option selected>Selecione</option>
                                            <option value="Teste 1">Teste 1</option>
                                            <option value="Teste 2">Teste 2</option>
                                            <option value="Teste 3">Teste 3</option>
                                        </select>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
            <!-- -----------------------------------------------PASSO 5------------------------------------------------------- -->
            <div class="question-container" id="question-5">
                <div class="title">Fases do Projeto</div>
                <div class="card">
                    <div class="card-body">

                        <!-- <div class="form-row">
                <div class="form-group col-md-6">
                <label for="IdCategoria5" style="padding-top:10px;">Categoria</label>
                <select class="custom-select" id="IdCategoria5">
                    <option selected>Selecione</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            </div>                -->

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-bottom:10px;">Fase 1</label> <br>
                                <input type="text" name ="fase[]" value = "1" style="display: none;">

                                <label for="inputEmail4" style="padding-bottom:10px;">Atividade</label>
                                <input type="text" class="form-control" id="atividade" name="atividade[]">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-bottom:10px;">Fase 2</label> <br>
                                <label for="inputEmail4" style="padding-bottom:10px;">Atividade</label>
            
                                <input type="text" name ="fase[]" value = "2" style="display: none;">
                                <input type="text" class="form-control" id="atividade" name="atividade[]">
                

                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-bottom:10px;">Fase 3</label> <br>
                                <label for="inputEmail4" style="padding-bottom:10px;">Atividade</label>
                                <input type="text" name ="fase[]" value = "3" style="display: none;">
                                <input type="text" class="form-control" id="atividade" name="atividade[]">

                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-bottom:10px;">Fase 4</label> <br>
                                <label for="inputEmail4" style="padding-bottom:10px;">Atividade</label>
                                <input type="text" name ="fase[]" value = "4" style="display: none;">
                                <input type="text" class="form-control" id="atividade" name="atividade[]">

                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-bottom:10px;">Fase 5</label> <br>
                                <label for="inputEmail4" style="padding-bottom:10px;">Atividade</label>
                                <input type="text" name ="fase[]" value = "5" style="display: none;">
                                <input type="text" class="form-control" id="atividade" name="atividade[]">

                            </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
            <!-- ------------------------------------------------FIM PASSSOS ------------------------------------------------ -->
        </form>
        <div class="button-bar">
            <input type="button" value="Voltar" id="raq_back">
            <input type="button" value="Próximo" id="raq_next">
        </div>

    </div>
    </div>
    </div>
    </div>

    <div id="overlay">
        <div class="thankyou">
            <h3>Enviado!</h3>
            <!-- <p>Obrigado!</p> -->
            <input type="button" id="start-over" value="Retornar">
        </div>
    </div>

    <footer>
        <!-- <p>Mostafa Ghanbari
            <script type="text/javascript">var d = new Date(); document.write(d.getFullYear())</script>
        </p>
      <p>
            Open up your console to see more ;)
        </p> -->
    </footer>
</main>
<style>
#stylemobile {
    display: none;
}

#styleAdd {
    position: relative;
    padding-top: 48px;
    font-size: 35px;
}

/* file botao */
#divFile {
    position: relative;
    overflow: hidden;
}

#inputFile {
    position: absolute;
    font-size: 50px;
    opacity: 0;
    right: 0;
    top: 0;
}

/* ---------- */
#cabecalho {
    height: 60px;
    padding-top: 15px;
    padding-bottom: 15px;

    background: linear-gradient(to right, #00b050, #17dc71);
    color: #fff;
    padding-left: 45%;
    padding-right: 50%;
}

/* .card {
    padding-top:40px;
     padding-bottom:60px;

} */

.fa {
    padding-top: 10px;
    font-size: 25px;
}

/****************************
	CSS RESET
*****************************/




/****************************
	Global Styling
*****************************/

* {
    font-family: calibri, arial
}



.form-steps {
    display: block;
    width: 100%;
    position: relative;
    margin: 40px 0;

}

.form-steps:after {
    content: "";
    display: table;
    clear: both;
}

.form-steps__item {
    padding: 0;
    position: relative;
    display: block;
    float: left;
    width: 20%;
    text-align: center;
}

.form-steps__item-content {
    display: inline-block;
}

.form-steps__item-icon {
    background: #e4e5e5;
    color: #8191ab;
    display: block;
    border-radius: 100%;
    border: 1px solid;
    border-color: rgb(129, 145, 171) !important;
    text-align: center;
    width: 45px;
    height: 45px;
    line-height: 25px;
    margin: 0 auto 10px auto;
    position: relative;
    font-size: 13px;
    font-weight: 700;
    z-index: 2;
}

.form-steps__item-text {
    font-size: 13px;
    color: #8191ab;
    font-weight: 500;
}

.form-steps__item-line {
    display: inline-block;
    height: 3px;
    width: 100%;
    background: #cfd8dc;
    position: absolute;
    left: -50%;
    top: 20px;
    z-index: 1;
}

.form-steps__item--active .form-steps__item-icon {
    background: #00aeef;
    color: #ffffff;
}

.form-steps__item--active .form-steps__item-line {
    -webkit-transition: background-color .5s ease;
    -moz-transition: background-color .5s ease;
    -o-transition: background-color .5s ease;
    transition: background-color .5s ease;
}

.form-steps__item--active .form-steps__item-icon {
    -webkit-transition: background-color 1s ease;
    -moz-transition: background-color 1s ease;
    -o-transition: background-color 1s ease;
    transition: background-color 1s ease;
}

.form-steps__item--completed .form-steps__item-text {
    color: #4f5e77;
}

.form-steps__item--active .form-steps__item-text {
    color: #4f5e77;
}

.form-steps__item--active .form-steps__item-line {
    background: #00aeef;
}

.form-steps__item--completed .form-steps__item-icon {
    background: #00aeef;
    color: #fff;
    background-size: 10px;
    background-repeat: no-repeat;
    background-position: center center;
    width: 25px;
    height: 25px;
    line-height: 25px;
}

.form-steps__item--completed .form-steps__item-line {
    background: #00aeef;
}


.container {
    /* border: 1px solid #dddddd; */
    background: #fff;
    /* border-radius: 4px; */
    /* width: 70%; */
    /* height: 230px; */
    /* margin: auto; */
    /* padding: 30px 40px; */
    /* position: relative; */
    /* box-shadow: 0 3px 10px -2px rgba(0, 0, 0, 0.17); */
}

input[type="text"] {
    z-index: 1;
    font-size: .8em;
    margin-top: 10px;
    outline: 0;
    -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
    text-align: left;
    line-height: 1.2em;
    padding: .5em;
    background: #fff;
    border: 1px solid rgba(34, 36, 38, .15);
    color: rgba(0, 0, 0, .87);
    border-radius: .28571429rem;
    -webkit-box-shadow: none;
    box-shadow: none;
}

input[type="text"]:focus {
    border-color: #85b7d9;
    background: #fff;
    color: rgba(0, 0, 0, .8);
    -webkit-box-shadow: none;
    box-shadow: none;
}

input[type="button"] {
    box-shadow: 0 0 0 0 rgba(34, 36, 38, .15) inset;
    font-size: 1rem;
    cursor: pointer;
    min-height: 1em;
    outline: 0;
    border: none;
    background: #e0e1e2 none;
    color: rgba(0, 0, 0, .6);
    margin: 0 .25em 0 0;
    padding: .788em 1.5em .788em;
    font-weight: 700;
    line-height: 1em;
    font-style: normal;
    text-align: center;
    border-radius: .285rem;
    -webkit-box-shadow: 0 0 0 1px transparent inset, 0 0 0 0 rgba(34, 36, 38, .15) inset;
    box-shadow: 0 0 0 1px transparent inset, 0 0 0 0 rgba(34, 36, 38, .15) inset;
}

input.error,
input[type="text"].error:focus {
    background-color: #fff6f6;
    border-color: #e0b4b4;
    color: #9f3a38;
}

p.error-text {
    position: absolute;
    bottom: -23px;
    left: 24px;
    color: rgba(255, 0, 0, .7);
    font-size: .6em;
}

#raq_next {
    background-color: #2185d0;
    color: #fff;
    text-shadow: none;
    background-image: none;
}

#raq_next.submit {
    background-color: #21ba45;
}

#raq_back.disabled {
    color: #bbbbbb;
    cursor: unset;
}


.question-container {
    display: none;
}

.active_panel {
    display: block;
}

.question-container {
    position: relative;
    font-weight: 500;
    font-size: 1.2rem;
    color: #434343;
    line-height: 30px;
    margin: 0;
}

.button-bar {
    padding-top: 80px;
    padding-left: 20px;
    /* position: absolute; */
    /* bottom: 10px; */

}

.tick {
    position: absolute;
    top: 30px;
    left: 155px;
    box-shadow: inset 3px -3px 0 green;
    height: 8px;
    transform: rotate(-50deg);
    width: 20px;
    margin: 50px auto;
    transition: all 1s;
}

.question-title {
    font-weight: 700;
    font-size: 2rem;
    color: #2785d0;
    line-height: 30px;
    margin-bottom: 20px;
}

.title {
    font-weight: 700;
    font-size: 2rem;
    color: #2785d0;
    line-height: 30px;
    margin-bottom: 20px;
}


#overlay {
    position: fixed;
    /*Sit on top of the page content  */
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 2;
    cursor: pointer;
}

/****************************
	Thank You Box
*****************************/
.thankyou {
    margin: auto;
    width: 260px;
    height: 160px;
    margin-top: 190px;
    background: #fff;
    padding: 15px 20px;
    line-height: 25px;
    border-radius: 4px;
    text-align: center;
    box-shadow: -1px 5px 32px 7px rgba(0, 0, 0, 0.5);
}

.thankyou input {
    margin-top: 40px;
}

.thankyou h3 {
    font-size: 3em;
    font-weight: 700;
    color: #21ba45;
    line-height: 50px;
}

@media (max-width: 1309px) {
    .card {
        padding-top: 50px;
        padding-bottom: 50px;
    }


    .tick {
        display: none;

    }
}

@media (max-width: 770px) {
    #stylemobile {
        display: block;
        position: relative;
        bottom: 45px;
        margin-left: 150px;
    }

    #styleAdd {
        display: none;
    }
}
</style>
<script>
/*
    IMPORTANT
    because we don't use Babel here, we have to stick
    to old syntax to let older browsers run this code
*/
$(function() {


    makeButtonDisable('#raq_back');

    focusOnCurrentAnswer();

    var counter = 1;
    var numberOfQuestions = 5;
    $('#raq_next').click(function() {
        // if( !validate() )
        //     return false;

        makeButtonEnable('#raq_back');

        // check if the user is in the last question
        if ($(this).attr('isSubmit') == 'true') {
            submitForm();
        }

        showElement('#question-' + ++counter);

        nextNavigation(counter);
        changeQuestionTitle(counter);

        if (counter == numberOfQuestions) {
            // show submit button
            showSubmitButton();
        }
        focusOnCurrentAnswer();
    });
    $('#raq_back').click(function() {
        removeError();

        if ($('#raq_back').hasClass('disabled'))
            return false;

        if ($('#raq_next').attr('isSubmit') == 'true')
            showNextButton();

        showElement('#question-' + --counter);

        backNavigation(counter);
        changeQuestionTitle(counter);

        if (counter == 1)
            makeButtonDisable('#raq_back');
    });

    // By doing this users can use enter key instead of clicking the mouse
    accessibility();

    pageReload();
});


function fadeAll() {
    $('form .question-container').each(function() {
        $(this).hide();
    });
}

function fadeIn(theElement) {
    $(theElement).fadeIn(700);
}

function showElement(theElement) {
    fadeAll();
    fadeIn(theElement);
}

function showSubmitButton() {
    $('#raq_next').prop('value', 'Confirmar');
    $('#raq_next').addClass('submit');
    $('#raq_next').attr('isSubmit', 'true');
}

function showNextButton() {
    $('#raq_next').prop('value', 'Next');
    $('#raq_next').removeClass('submit');
    $('#raq_next').attr('isSubmit', 'false');
}

function makeButtonDisable(button) {
    $(button).addClass('disabled');
}

function makeButtonEnable(button) {
    $(button).removeClass('disabled');
}

function nextNavigation(currentQuestion) {
    $('.form-steps__item.step-' + currentQuestion).addClass('form-steps__item--active');
    $('.form-steps__item.step-' + (currentQuestion - 1) + ' .form-steps__item-text').after('<div class="tick"></div>');
}

function backNavigation(currentQuestion) {
    $('.form-steps__item.step-' + (currentQuestion + 1)).removeClass('form-steps__item--active');
    $('.form-steps__item.step-' + currentQuestion + ' .tick').remove();
}
// function validate() {
//     if( $('input[type="text"]:visible').val().length <= 0 ) {
//         $('input[type="text"]:visible').addClass('error');
//         if( !$('.error-text').length )
//             $('input.error').after('<p class="error-text">Campo Obrigatório</p>');
//         return false;
//     }
//     else {
//         $('input[type="text"]:visible').removeClass('error');
//         $('.error-text').remove();
//         return true;
//     }
// }
function changeQuestionTitle(counter) {
    $('.question-title').text('Passo ' + counter);
}

function showThankyou() {
    $('#overlay').show();
}

function showThankyou() {
    $('#overlay').show();
}

function focusOnCurrentAnswer() {
    $('input[type="text"]:visible').focus();
}

function accessibility() {
    $('input[type="text"]').keypress(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13')
            $('#raq_next').click();
    });
}

function removeError() {
    $('input[type="text"]:visible').removeClass('error');
    $('.error-text').remove();
}

function submitForm() {
    /*
        Submit, But do not refresh the page
        to show the thank you message
    */
    $('form').submit(function(e) {
        e.preventDefault();
    });
    showThankyou();
    return false;
}

function pageReload() {
    $('#start-over').click(function() {
        window.location.reload();
    });
}
</script>

<!-------------- botoes dinamicos passo 4 ------------------->
<script>
$(function() {


    // mostra input de recursos necessarios
    $(document).on('click', '#IdCategoria', function() {
        var categoria = $("#IdCategoria").val();
        console.log(categoria);
        if (categoria !== 'Selecione') {
            document.querySelector('#dynamicDiv').style.display = 'block';
        }
    });


    // --------------------------------------------
    var scntDiv = $('#dynamicDiv');

    // ----função que organiza as ids---------------------
    function ids() {
        scntDiv.find("input:not(:first)").each(function(i) {
            this.id = "item" + parseInt(i + 1);
        });
    }
    //    ----------------------------------------------------
    $(document).on('click', '#addInput', function() {
        var nome = $("#inputeste").val();

        // verifica se o input esta vazio 

        if (nome == 'Selecione') {
            document.getElementById('#addInput').readOnly = true;
        }
        // ---------------insere novos inputs------------------------- 
        $('<p>' +
            '<label>' + nome + '</label>' +
            '<input value = "' + nome + '" name ="recursos[]" style= "display: none;"></input>' +
            //   '<input type="text" size="20" value="" placeholder="" /> '+
            '<a class="btn btn" href="javascript:void(0)" id="remInput">' +
            '<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> ' +
            '<i class="fa fa-minus-circle" aria-hidden="true" style="color:#dc3545"></i>' +
            '</a>' +
            '</p>').appendTo(scntDiv);

        ids();

        return false;
    });
    // ------------ remove os inputs add -------------------------
    $(document).on('click', '#remInput', function() {
        $(this).parents('p').remove();
        ids();
        return false;
    });
})
</script>
<!-------------- botoes dinamicos passo 5 ------------------->
<script>
$(function() {

    $(document).on('click', '#raq_next', function() {
        var next = $("#raq_next").val();
        console.log(next);
        if (next == 'Confirmar') {
            $(document).on('click', '#raq_next', function() {
                document.getElementById('raq_questions').submit();
            });
        }
    });
    //  // mostra input de recursos necessarios
    //  $(document).on('click', '#IdCategoria5', function () {
    //       var categoria5 = $("#IdCategoria5").val();
    //       console.log(categoria5);
    //       if(categoria5 !== 'Selecione'){
    //         document.querySelector('#dynamicDiv5').style.display = 'block';
    //       }
    //    });


    // --------------------------------------------
    var scntDiv = $('#dynamicDiv5');

    // ----função que organiza as ids---------------------
    function ids() {
        scntDiv.find("input:not(:first)").each(function(i) {
            this.id = "item" + parseInt(i + 1);
        });
    }
    //    ----------------------------------------------------
    $(document).on('click', '#addInput5', function() {
        var nome = $("#inputeste5").val();

        // verifica se o input esta vazio 

        if (nome == 'Selecione') {
            document.getElementById('#addInput5').readOnly = true;
        }
        // ---------------insere novos inputs------------------------- 
        $('<p>' +
            '<label>' + nome + '</label>' +
            //   '<input type="text" size="20" value="" placeholder="" /> '+
            '<a class="btn btn" href="javascript:void(0)" id="remInput5">' +
            '<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> ' +
            '<i class="fa fa-minus-circle" aria-hidden="true" style="color:#dc3545"></i>' +
            '</a>' +
            '</p>').appendTo(scntDiv);


        ids();

        return false;
    });
    // ------------ remove os inputs add -------------------------
    $(document).on('click', '#remInput5', function() {
        $(this).parents('p').remove();
        ids();
        return false;
    });
})
</script>

<script>
// legendas inputs  
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

@endsection