@extends('templates.navtemplate')

@section('content')

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 p-4">
                <div class="card">
                    <div class="card-header">
                        <b> Permissões de Usuario</b>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{url("admin/usuarios-permissao/$users->id")}}">
                            @csrf
                            <h1>Defina o que o usuário <br /> poderá acessar</h2> <br>
                                <hr>
                                <div class="row">
                                    <div id="nivel">
                                        @if ($users->permissao === 1)
                                        <label>
                                            <input checked="checked" type="radio" name="permissao" id="permissao" value="1" />
                                            <span id="admMobile1" style="display:block;" class="lbl padding-8"><i
                                                    class="fa fa-address-card-o" aria-hidden="true" value="1"
                                                    style="font-size:30px;" > </i><br> <a
                                                    style="text-align:center;">Administrador</a></span>
                                            <br>
                                        </label>
                                        <a style="padding-left:40px;"></a>
                                        
                                        <label>
                                            <input type="radio" name="permissao" id="permissao" value="0" />
                                            <span style="display:block;" class="lbl padding-8"><i class="fa fa-user-o"
                                                    aria-hidden="true" value="0" style="font-size:30px;" checked="checked"> </i><br> <a
                                                    style="text-align:center;">Usuario</a></span>
                                            <br>
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="permissao" id="permissao" value="1" />
                                            <span id="admMobile1" style="display:block;" class="lbl padding-8"><i
                                                    class="fa fa-address-card-o" aria-hidden="true" value="1"
                                                    style="font-size:30px;"> </i><br> <a
                                                    style="text-align:center;">Administrador</a></span>
                                            <br>
                                        </label>
                                        <a style="padding-left:40px;"></a>
                                        
                                        <label>
                                            <input checked="checked" type="radio" name="permissao" id="permissao" value="0" />
                                            <span style="display:block;" class="lbl padding-8"><i class="fa fa-user-o"
                                                    aria-hidden="true" value="0" style="font-size:30px;" checked="checked"> </i><br> <a
                                                    style="text-align:center;">Usuario</a></span>
                                            <br>
                                        </label>
                                        @endif
                                        <!-- <div class="card" id="user">
                                        <label>
                                                <input type="radio" name="radio"/>
                                                <span class="lbl padding-8"><i class="fa fa-user-o" aria-hidden="true" value="0"  style="font-size:30px;"></i><br><a style="text-align:center;">Usuário</a></span>
                                        </label>
                                </div> -->
                                    </div>
                                </div>
                                <div class="half-col last">
                                    <header>Permissões</header>
                                    <ul>
                                        <li>
                                            <label>
                                                @if ($users->projeto === 1)
                                                <input type="checkbox" name="projeto" id="projeto" value="1" checked="checked"/>
                                                <span class="lbl padding-8">Projetos</span>
                                                @else
                                                <input type="checkbox" name="projeto" id="projeto" value="1"/>
                                                <span class="lbl padding-8">Projetos</span>
                                                @endif
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                @if ($users->processo === 1)
                                                <input type="checkbox" name="processo" id="processo" value="1" checked="checked"/>
                                                <span class="lbl padding-8">Processos</span>
                                                @else
                                                <input type="checkbox" name="processo" id="processo" value="1"/>
                                                <span class="lbl padding-8">Processos</span>
                                                @endif
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                @if ($users->cronograma === 1)
                                                <input type="checkbox" name="cronograma" id="cronograma" value="1" checked="checked"/>
                                                <span class="lbl padding-8">Cronogramas</span>
                                                @else
                                                <input type="checkbox" name="cronograma" id="cronograma" value="1"/>
                                                <span class="lbl padding-8">Cronogramas</span>
                                                @endif
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                    </div>
                    <div id="botoes" class="form-group col-12 ">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <button href="{{url('admin/usuarios')}}" type="submit" class="btn btn-danger">Voltar</button>
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
#botoes {
    margin-top: 10px;
}

.container {
    margin-top: 100px;
}

/* ------------------------- */
body {
    font-family: "Source Sans Pro", sans-serif;
    font-size: 14px;
    color: #666;
    background-color: #ECF4FA;
}

h1 {
    text-align: center;
}

#nivel {
    padding-left: 10%;
    padding-right: 10%;
}
.card{
        box-shadow: 0px 0px 16px 1px rgba(0,0,0,0.1);
    }

.card-body {
    padding-left: 10%;
    padding-right: 10%;
}

.container header {
    margin-bottom: 10px;
    padding: 10px 20px;
    border-bottom: 1px solid #ddd;
    background: #F4F4F4;
}

.half-col {
    border: 1px solid #ddd;
    float: left;
    width: 80%;
    height: 250px;
    margin-right: 10%;
    margin-left: 5%;
    margin-bottom: 5%;
    box-shadow: 0 3px 0 #eee;
}

.half-col.last {
    width: 80%;
    margin-right: 0;
    height: 250px;
}

.half-col ul {
    list-style: none;
    padding-left: 20px;
}

.half-col li {
    overflow: hidden;
    display: block;
    margin-bottom: 10px;
}

input[type="checkbox"],
input[type="radio"] {
    opacity: 0;
    position: absolute;
    z-index: 12;
    width: 18px;
    height: 18px;
}

input[type="checkbox"]:checked,
input[type="radio"]:checked,
input[type="checkbox"]:focus,
input[type="radio"]:focus {
    outline: none !important;
}

input[type="checkbox"]+.lbl,
input[type="radio"]+.lbl {
    position: relative;
    z-index: 11;
    display: inline-block;
    margin: 0;
    line-height: 20px;
    min-height: 14px;
    min-width: 14px;
    font-weight: normal;
}

input[type="checkbox"]+.lbl.padding-16::before,
input[type="radio"]+.lbl.padding-16::before {
    margin-right: 16px;
}

input[type="checkbox"]+.lbl.padding-12::before,
input[type="radio"]+.lbl.padding-12::before {
    margin-right: 12px;
}

input[type="checkbox"]+.lbl.padding-8::before,
input[type="radio"]+.lbl.padding-8::before {
    margin-right: 8px;
}

input[type="checkbox"]+.lbl.padding-4::before,
input[type="radio"]+.lbl.padding-4::before {
    margin-right: 4px;
}

input[type="checkbox"]+.lbl.padding-0::before,
input[type="radio"]+.lbl.padding-0::before {
    margin-right: 0px;
}

input[type="checkbox"]+.lbl::before,
input[type="radio"]+.lbl::before {
    font-family: fontAwesome;
    font-weight: normal;
    font-size: 11px;
    color: #2091CF;
    content: "\a0";
    background-color: #FAFAFA;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    border-radius: 0;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    height: 13px;
    line-height: 13px;
    min-width: 13px;
    margin-right: 1px;
    margin-top: -5px;
}

input[type="checkbox"]:checked+.lbl::before,
input[type="radio"]:checked+.lbl::before {
    display: inline-block;
    content: "\f00c";
    background-color: #F5F8FC;
    border-color: #ADB8C0;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05),
        inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05),
        inset 15px 10px -12px rgba(255, 255, 255, 0.1);
}

input[type="checkbox"]:hover+.lbl::before,
input[type="radio"]:hover+.lbl::before,
input[type="checkbox"]+.lbl:hover::before,
input[type="radio"]+.lbl:hover::before {
    border-color: #1C7AAD;
}

input[type="checkbox"]:active+.lbl::before,
input[type="radio"]:active+.lbl::before,
input[type="checkbox"]:checked:active+.lbl::before,
input[type="radio"]:checked:active+.lbl::before {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px 1px 3px rgba(0, 0, 0, 0.1);
}

input[type="checkbox"]:disabled+.lbl::before,
input[type="radio"]:disabled+.lbl::before,
input[type="checkbox"][disabled]+.lbl::before,
input[type="radio"][disabled]+.lbl::before,
input[type="checkbox"].disabled+.lbl::before,
input[type="radio"].disabled+.lbl::before {
    background-color: #ddd !important;
    border-color: #ccc !important;
    box-shadow: none !important;
    color: #bbb;
}

input[type="radio"]+.lbl::before {
    border-radius: 32px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 36px;
}

input[type="radio"]:checked+.lbl::before {
    content: "\2022";
}

/* mobile */
@media screen and (max-width: 770px) {}
</style>
<script>
$('.catChecks label[title*="apple"] input').prop("checked", true);
$('input[name=category]').change(
    function() {
        $('.ChecksColor input').closest('label').css({
            backgroundColor: '#CDB391',
        });
        $('.ChecksColor :checked').closest('label').css({
            backgroundColor: '#7FCBCD',
        });
    }
).change();
</script>
@endsection