@extends('templates.navtemplate')
@section('content')
<!-- <div id= cabecalho><h4></h4></div> -->
<!-- ---------------------------CARDS ------------------------------------- -->
<main>
    <nav class="form-steps">
        <div class="form-steps__item step-1 form-steps__item--completed">
            <div class="form-steps__item-content">
                <span class="form-steps__item-icon" style="width: 45px; height: 45px;"><i class="fa fa-file-text-o"
                        aria-hidden="true"></i></span>
                <span class="form-steps__item-text">PASSO 1</span>
            </div>
        </div>

        <div class="form-steps__item step-2">
            <div class="form-steps__item-content">
                <span class="form-steps__item-icon"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                <span class="form-steps__item-line"></span>
                <span class="form-steps__item-text">PASSO 2</span>
            </div>
        </div>
    </nav>
    <!-- -------------------------------Passo 1 -------------------------------------- -->
    <div class="container">
        <form action="{{url('fornecedores')}}" method="post" id="raq_questions">
            @csrf
            <div class="question-container active_panel" id="question-1">
                <div class="title">EMPRESA</div>

                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style="padding-bottom: 10px;">Tipo de empresa</label>
                                <select type="text" class="custom-select" name="tipo_empresa">
                                    <option selected>Escolha...</option>
                                    <option value="Serviços Gerais">Serviços Gerais</option>
                                    <option value="Refrigeração">Refrigeração</option>
                                    <option value="Internet">Internet</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Razão social / Nome Fantasia</label>
                                <input type="text" name="nome" class="form-control" id="inputPassword4"
                                    placeholder="Razão social / Nome Fantasia" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">CNPJ</label>
                                <input type="text" name="cpf_cnpj" class="form-control" id="inputEmail4"
                                    placeholder="CNPJ" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Inscrição Estadual</label>
                                <input type="text" name="insc_estadual" class="form-control" id="inputPassword4"
                                    placeholder="Inscrição Estadual" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title" style="padding-top:35px;">RESPONSÁVEL</div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nome Completo</label>
                                <input type="text" name="responsavel" class="form-control" id="inputPassword4"
                                    placeholder="Nome Completo" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">E-mail</label>
                                <input type="email" name="email" class="form-control" id="inputPassword4"
                                    placeholder="E-mail" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Função</label>
                                <input type="text" name="cargo" class="form-control" id="inputEmail4"
                                    placeholder="Função" />
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Fone</label>
                                <input type="text" name="telefone" class="form-control" id="inputPassword4"
                                    placeholder="Fone" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------ Passo 2 -------------------------------------------------------- -->

            <div class="question-container" id="question-2">
                <div class="title">Dados Bancários</div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="inputEstado">Banco</label>
                                <select name="banco" id="inputEstado" class="form-control">

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
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="opcao1">
                                    <label class="form-check-label" for="inlineRadio1">Corrente</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="opcao2">
                                    <label class="form-check-label" for="inlineRadio2">Poupança</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputCity">Agência</label>
                                <input name="agencia" type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">Conta</label>
                                <input name="conta" type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputCEP">Dígito</label>
                                <input name="digito" type="text" class="form-control" id="inputCEP">
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------FIM PASSSOS ------------------------------------------------ -->

            <div class="button-bar">
                <input type="button" value="Voltar" id="raq_back" />
                <input type="button" value="Próximo" id="raq_next" />
            </div>
    </div>
    </form>
    <div id="overlay">
        <div class="thankyou">
            <h3>Enviado!</h3>
            <!-- <p>Obrigado!</p> -->
            <input type="button" id="start-over" value="Retornar" />
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
.tipo2 {
    margin-left: 20px;

}

#tipoConta {
    position: absolute;
    margin-bottom: 55px;


}

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
    margin: 40px 0px 0px 30%;

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
    padding-top: 40px;
    padding-left: 15px;
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
    var numberOfQuestions = 2; // ultimo passo para o submit
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