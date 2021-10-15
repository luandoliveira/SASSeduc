@extends('templates.navtemplate')

@section('content')

<!-- Teste de Senha e Requisição Ajax -->

<script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">

<!-- necessario para o modal perfil pegar -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
</script>
<div id="lista" class="container">
    <div class="row">
        <!-- <table id="example" class="table table-striped" style="width:100%;background-color:#fff;"> -->
        <div class="title">Projeto: {{$projetos->projeto}}</div>
        <div class="card">

            <!-- <div class="card-header">
< Lista de usuários 
</div> -->
            <div class="table-responsive  table-sm">
                <div class="form-group" id="groupInput">
                    <label for="inputData">Abertura</label>
                    <input type="text" name="name" class="" id="inputData" value="{{date('d/m/y', strtotime($projetos->created_at))}}" style="margin-right:10px;" readonly>
                    <label for="inputResp">Responsável</label>
                    <input type="text" name="name" class="" id="" value="{{$projetos->respon_projeto}}" readonly> 
                </div>
                <hr>
                <table id="example" class="table table-striped table-bordered"
                    style="width:100%;background-color:#fff;">
                    <thead>
                        <tr id="cabecalho">
                            <th>Fase</th>
                            <th>Atividade</th>
                            <th>Inicio</th>
                            <th>Fim</th>
                            <th>Situação</th>
                            <th>Local</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                        $fases = $projetos->find($projetos->id)->relFases;
        
                        @endphp
                        @foreach ($fases as $fase)
                        @if ($fase->ativo === 0)
                          
                        <tr>
                            <td>{{$fase->fase}}</td>
                            <td>{{$fase->atividade}}</td>
                            @if (!empty($fase->data_ini))
                            <td>{{date('d/m/y', strtotime($fase->data_ini))}}</td>
                            @else
                            <td>Sem data definida</td>
                            @endif
                            @if (!empty($fase->data_ini))
                            <td>{{date('d/m/y', strtotime($fase->data_fim))}}</td>
                            @else
                            <td>Sem data definida</td>
                            @endif
                            <td></td>
                            <td>{{$projetos->escola}}</td>

                            <td>
                                @if ($fase->atividade == 'Orçamento')
                                <a style="padding-left:10px;border:3px;border-color:green" href="" data-toggle="modal"
                                    data-target="#modalContactForm">
                                    <button class="btn btn" style="color:#189918;"><i class="fa fa-pencil"
                                            aria-hidden="true"></i></button>
                                </a>
                                @else
                                <a style="padding-left:10px;border:3px;border-color:green" href="" data-toggle=""
                                    data-target="#modalContactForm">
                                    <button class="btn btn" style="color:#189918;"><i class="fa fa-pencil"
                                            aria-hidden="true"></i></button>
                                </a>

                                @endif
                                <a style="padding-left:10px;border:3px;border-color:green" data-toggle="" data-target="#modalContactForm">
                                    <button class="btn btn" style="color:#124c89;"><i class=" fa fa-eye "
                                            aria-hidden="true"></i></button>
                                </a>
                                <form method="post" action="{{url("projetos/fase/$projetos->id")}}" >
                                    @csrf
                                    <input type="text" name="fase" value="{{$fase->id}}" style="display: none;">
                                    <input type="number" name="ativo" value="1" style="display: none;">
                                <a style="padding-left:10px;">
                                    <button submit class=" btn btn" style="color:red;"><i class=" fa fa-close " aria-hidden="true"></i></button>
                                </a>
                                </form>
                            </td>

                    
                    </tbody>
                    @endif
                    @endforeach
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

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-personalizado" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <!---------------------------------- header modal--------------------------------------- -->
                <h4 class="modal-title w-100 font-weight-bold" style="color:#195695;"><i class="fa fa-users"
                        aria-hidden="true" style="color:#195695;padding-right:10px;font-size:30px;"></i>FORNECEDOR</h4>
                <!-- -------------------------------xxxxxxxxxxxxx-------------------------------- -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- --------------------------------XXXXX DADOS XXXXXX------------------------------ -->
            <div class="modal-body mx-3">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Dados de Indentificação</legend>
                    <div class="form-row" id="idModal">
                        <div class="form-group col-md-2">
                            <label for="inputEmail4">ID</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="ID">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEstado">Fornecedor</label>
                            <select id="inputEstado" class="form-control">
                                <option selected>Selecionar...</option>
                                @foreach ($fornecedores as $fornecedor)
                                <option value="{{$fornecedor->nome}}">{{$fornecedor->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row tipo2">
                            <div class="form-check form-check-inline">
                                <label id="tipoPessoa">Tipo</label>
                                <input class="form-check-input" type="radio" name="PF" id="IdPf" value="opcao1">
                                <label class="form-check-label" for="PF">Pessoa Física</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="PJ" id="IdPj" value="opcao2">
                                <label class="form-check-label" for="PJ">Pessoa Jurídica</label>
                            </div>
                        </div>
                    </div>
                    <!-- -----------------------------------XXXXXX ENDEREÇO XXXXX------------------------------- -->
                    <p>ENDEREÇO</p>
                    <hr id="Line">
                    <div class="form-row">
                        <div class="form-group col-md-1">
                            <label for="inputCity">CEP</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCity">Rua</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputCEP">Bairro</label>
                            <input type="text" class="form-control" id="inputCEP">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputCEP">Complemento</label>
                            <input type="text" class="form-control" id="inputCEP">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputCEP">Nº</label>
                            <input type="text" class="form-control" id="inputCEP">
                        </div>
                    </div> <!-- ----------------xxxxxxxxx FIM DADOS xxxxxxxxxxxxxx--------------------------- -->
                </fieldset>
                <!-- ----------------xxxxxxxxx DADOS DE PAGAMENTO xxxxxxxxxxxxxx--------------------------- -->
            </div>

            <div class="modal-body mx-3">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Dados de Pagamento</legend>
                    <div class="form-row" id="idModal">

                        <div class="form-group col-md-4">
                            <label for="inputEstado">Banco</label>
                            <select id="inputEstado" class="form-control">
                                        <option selected>Selecionar...</option>
                                        <option value="001">001 - Banco do Brasil</option>
                                        <option value="003">003 - Banco da Amazônia</option>
                                        <option value="004">004 - Banco do Nordeste</option>
                                        <option value="021">021 - Banestes</option>
                                        <option value="025">025 - Banco Alfa</option>
                                        <option value="027">027 - Besc</option>
                                        <option value="029">029 - Banerj</option>
                                        <option value="031">031 - Banco Beg</option>
                                        <option value="033">033 - Banco Santander Banespa</option>
                                        <option value="036">036 - Banco Bem</option>
                                        <option value="037">037 - Banpará</option>
                                        <option value="038">038 - Banestado</option>
                                        <option value="039">039 - BEP</option>
                                        <option value="040">040 - Banco Cargill</option>
                                        <option value="041">041 - Banrisul</option>
                                        <option value="044">044 - BVA</option>
                                        <option value="045">045 - Banco Opportunity</option>
                                        <option value="047">047 - Banese</option>
                                        <option value="062">062 - Hipercard</option>
                                        <option value="063">063 - Ibibank</option>
                                        <option value="065">065 - Lemon Bank</option>
                                        <option value="066">066 - Banco Morgan Stanley Dean Witter</option>
                                        <option value="069">069 - BPN Brasil</option>
                                        <option value="070">070 - Banco de Brasília – BRB</option>
                                        <option value="072">072 - Banco Rural</option>
                                        <option value="073">073 - Banco Popular</option>
                                        <option value="074">074 - Banco J. Safra</option>
                                        <option value="075">075 - Banco CR2</option>
                                        <option value="076">076 - Banco KDB</option>
                                        <option value="096">096 - Banco BMF</option>
                                        <option value="104">104 - Caixa Econômica Federal</option>
                                        <option value="107">107 - Banco BBM</option>
                                        <option value="116">116 - Banco Único</option>
                                        <option value="151">151 - Nossa Caixa</option>
                                        <option value="175">175 - Banco Finasa</option>
                                        <option value="184">184 - Banco Itaú BBA</option>
                                        <option value="204">204 - American Express Bank</option>
                                        <option value="208">208 - Banco Pactual</option>
                                        <option value="212">212 - Banco Matone</option>
                                        <option value="213">213 - Banco Arbi</option>
                                        <option value="214">214 - Banco Dibens</option>
                                        <option value="217">217 - Banco Joh Deere</option>
                                        <option value="218">218 - Banco Bonsucesso</option>
                                        <option value="222">222 - Banco Calyon Brasil</option>
                                        <option value="224">224 - Banco Fibra</option>
                                        <option value="225">225 - Banco Brascan</option>
                                        <option value="229">229 - Banco Cruzeiro</option>
                                        <option value="230">230 - Unicard</option>
                                        <option value="233">233 - Banco GE Capital</option>
                                        <option value="237">237 - Bradesco</option>
                                        <option value="241">241 - Banco Clássico</option>
                                        <option value="243">243 - Banco Stock Máxima</option>
                                        <option value="246">246 - Banco ABC Brasil</option>
                                        <option value="248">248 - Banco Boavista Interatlântico</option>
                                        <option value="249">249 - Investcred Unibanco</option>
                                        <option value="250">250 - Banco Schahin</option>
                                        <option value="252">252 - Fininvest</option>
                                        <option value="254">254 - Paraná Banco</option>
                                        <option value="263">263 - Banco Cacique</option>
                                        <option value="265">265 - Banco Fator</option>
                                        <option value="266">266 - Banco Cédula</option>
                                        <option value="300">300 - Banco de la Nación Argentina</option>
                                        <option value="318">318 - Banco BMG</option>
                                        <option value="320">320 - Banco Industrial e Comercial</option>
                                        <option value="356">356 - ABN Amro Real</option>
                                        <option value="341">341 - Itau</option>
                                        <option value="347">347 - Sudameris</option>
                                        <option value="351">351 - Banco Santander</option>
                                        <option value="353">353 - Banco Santander Brasil</option>
                                        <option value="366">366 - Banco Societe Generale Brasil</option>
                                        <option value="370">370 - Banco WestLB</option>
                                        <option value="376">376 - JP Morgan</option>
                                        <option value="389">389 - Banco Mercantil do Brasil</option>
                                        <option value="394">394 - Banco Mercantil de Crédito</option>
                                        <option value="399">399 - HSBC</option>
                                        <option value="409">409 - Unibanco</option>
                                        <option value="412">412 - Banco Capital</option>
                                        <option value="422">422 - Banco Safra</option>
                                        <option value="453">453 - Banco Rural</option>
                                        <option value="456">456 - Banco Tokyo Mitsubishi UFJ</option>
                                        <option value="464">464 - Banco Sumitomo Mitsui Brasileiro</option>
                                        <option value="477">477 - Citibank</option>
                                        <option value="479">479 - Itaubank (antigo Bank Boston)</option>
                                        <option value="487">487 - Deutsche Bank</option>
                                        <option value="488">488 - Banco Morgan Guaranty</option>
                                        <option value="492">492 - Banco NMB Postbank</option>
                                        <option value="494">494 - Banco la República Oriental del Uruguay</option>
                                        <option value="495">495 - Banco La Provincia de Buenos Aires</option>
                                        <option value="505">505 - Banco Credit Suisse</option>
                                        <option value="600">600 - Banco Luso Brasileiro</option>
                                        <option value="604">604 - Banco Industrial</option>
                                        <option value="610">610 - Banco VR</option>
                                        <option value="611">611 - Banco Paulista</option>
                                        <option value="612">612 - Banco Guanabara</option>
                                        <option value="613">613 - Banco Pecunia</option>
                                        <option value="623">623 - Banco Panamericano</option>
                                        <option value="626">626 - Banco Ficsa</option>
                                        <option value="630">630 - Banco Intercap</option>
                                        <option value="633">633 - Banco Rendimento</option>
                                        <option value="634">634 - Banco Triângulo</option>
                                        <option value="637">637 - Banco Sofisa</option>
                                        <option value="638">638 - Banco Prosper</option>
                                        <option value="643">643 - Banco Pine</option>
                                        <option value="652">652 - Itaú Holding Financeira</option>
                                        <option value="653">653 - Banco Indusval</option>
                                        <option value="654">654 - Banco A.J. Renner</option>
                                        <option value="655">655 - Banco Votorantim</option>
                                        <option value="707">707 - Banco Daycoval</option>
                                        <option value="719">719 - Banif</option>
                                        <option value="721">721 - Banco Credibel</option>
                                        <option value="734">734 - Banco Gerdau</option>
                                        <option value="735">735 - Banco Pottencial</option>
                                        <option value="738">738 - Banco Morada</option>
                                        <option value="739">739 - Banco Galvão de Negócios</option>
                                        <option value="740">740 - Banco Barclays</option>
                                        <option value="741">741 - BRP</option>
                                        <option value="743">743 - Banco Semear</option>
                                        <option value="745">745 - Banco Citibank</option>
                                        <option value="746">746 - Banco Modal</option>
                                        <option value="747">747 - Banco Rabobank International</option>
                                        <option value="748">748 - Banco Cooperativo Sicredi</option>
                                        <option value="749">749 - Banco Simples</option>
                                        <option value="751">751 - Dresdner Bank</option>
                                        <option value="752">752 - BNP Paribas</option>
                                        <option value="753">753 - Banco Comercial Uruguai</option>
                                        <option value="755">755 - Banco Merrill Lynch</option>
                                        <option value="756">756 - Banco Cooperativo do Brasil</option>
                                        <option value="757">757 - KEB</option>
                            </select>
                        </div>
                        <div class="form-row tipo2">
                            <div class="form-check form-check-inline">
                                <label id="tipoConta">Tipo</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="opcao1">
                                <label class="form-check-label" for="inlineRadio1">Corrente</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="opcao2">
                                <label class="form-check-label" for="inlineRadio2">Poupança</label>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputCity">Agência</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCity">Conta</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputCEP">Dígito</label>
                            <input type="text" class="form-control" id="inputCEP">
                        </div>


                    </div>
                </fieldset>
            </div>
            <!-- ----------------xxxxxxxxx FIM PAGsAMENTO xxxxxxxxxxxxxx--------------------------- -->
            <div class="modal-footer d-flex justifsy-content-center">
                <button class="btn btn-primary">Salvar</button>
            </div>

        </div>
    </div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<!-- Scripts do ajax -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

<!-- <script>
    (function(win, doc){
        'use strict';
        //Deletar
        function confirmDel(event)
        {
            event.preventDefault();

            //console.log(event.target.parentNode.href)
            
            let token = doc.getElementsByName("_token")[0].value;
            if(confirm("Deseja excluir esta Fase?")){
                    let ajax = new XMLHttpRequest();
                    ajax.open("DELETE", event.target.parentNode.href);
                    ajax.setRequestHeader('X-CSRF-TOKEN', token);
                    ajax.onreadystatechange = function(){
                        if(ajax.readyState === 4 && ajax.status === 200) {
                            win.location.href="fases";
                        }
                    };
                    ajax.send();
            } else {
                return false;
            }

        }
        if (doc.querySelector('.js-del-fase')){
            let btn = doc.querySelectorAll('.js-del-fase');
            for (let i=0; i<btn.length; i++) {
                btn[i].addEventListener('click', confirmDel,false);
            }
        }
    })(window,document);
</script> -->

<style>
/* CSS MODAL FORNECEDOR*/
#tipoPessoa {
    position: absolute;
    margin-bottom: 50px;


}

#tipoConta {
    position: absolute;
    margin-bottom: 50px;


}

.tipo2 {
    margin-left: 20px;

}

#Line {
    margin-top: -25px;
    margin-left: 90px;
    border-top: 1px solid #0037ff;
}

fieldset.scheduler-border {
    border: 1px groove #0af !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow: 0px 0px 0px 0px #000;
    box-shadow: 0px 0px 0px 0px #000;
    margin-top: 30px !important;
}

legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
    width: auto;
    padding: 0 10px;
    border-bottom: none;
    margin-top: -15px;
    background-color: white;
    color: black;
}


.fieldset-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow: 0px 0px 0px 0px #000;
    box-shadow: 0px 0px 0px 0px #000;
}

.fieldset-border .legend-border {
    font-size: 1.2em !important;
    text-align: left !important;
    width: auto;
    padding: 0 10px;
    border-bottom: none;
}


.modal-personalizado {
    min-width: 80%;
}

.modal-personalizado.modal-content {
    min-height: 50vh;
}

/* ----------------------------- */
#groupInput {
    position: relative;
    top: 20px;
    margin-bottom: 40px;
}


.dataTables_filter {
    display: none;
}

#cabecalho {

    background-color: #2e75b6;
    color: #fff;
    text-align: center;
}

.title {
    font-weight: 700;
    font-size: 2rem;
    color: #2785d0;
    line-height: 30px;
    margin-top: 100px;

}

.fa {
    font-size: 20px;
    padding: 0px;
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 2px solid #2e75b6;
    padding: .375rem .75rem;

    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.card {
    box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}


.pagination a:hover:not(.active) {
    background-color: #ddd;
    color: #2e75b6;
    font-weight: bold;
}

/* table tr:nth-child(even) {
     background-color: #ECF4FA;
} */

.card-header {

    margin-bottom: 20px;
}

hr {
    color: #2e75b6;
}

.row {

    margin-bottom: 20px;
}


#lista {

    margin-top: 50px;
}

#contfooter {
    color: #2e75b6;

    background-color: #dfecf7;
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
    font-size: 100%;
    background-color: #ECF4FA;
}


a {
    transition: background 0.2s, color 0.2s;
}

a:hover,
a:focus {
    text-decoration: none;
}

@media (max-width: 770px) {

    #tipoPessoa {
        position: relative;
        margin-bottom: 0px;
        margin-right: 20px;

    }
}
</style>


@endsection