<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<title>Document</title>


  </head>

<body>
<!-- ------------------------------------------------------- Menu Opções ---------------------------------------------------------- -->
<div id="wrapper">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
    <img  id="logo" src="img/logo.png" width="100" height="100" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>
    </div>
    <div id="esconde">
        <a ><i><img  id="logoicon" style="display:none;margin-left:11px;margin-top:12px;" src="img/logo.png" width="40" height="40"></img></i></a></div>
     
    <ul class="sidebar-nav">
      <li>
        <a style="margin-top:35px;" href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-home"></i>Home </a>
      </li>
      <li>
        <a href="#"><i class="fa fa-search"></i>Buscar</a>
      </li>
      <li>
        <a href="#"><i class="fa fa-user"></i>Usuarios</a>
      </li>
    </ul>
    
  </aside>

  
<!-- ------------------------------------------------------- nav --------------------------------------------------------------- -->
  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand" id="sidebar-toggle" onclick="Mudarestado('logoicon')"><i class="fa fa-bars"></i></a>
        </div>
              <div>
              <div class="btn-group">
              <img class="rounded-pill img-fluid" width="38" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>
              <img style="display:none;" src="img/perfil.png" width="42" height="32" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>          
               <div style="padding-top:5px;padding-left:5px;" class="text-decoration-none" data-toggle="dropdown" id="nomeuser"><h5 style="color:#fff">Moises Oliveira</h5></div>
  <div class="dropdown-menu dropdown-menu-right">
  <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
            Perfil
        </button>
      <button class="dropdown-item" type="button" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</button>
      
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
@yield('content')

<!-- ---------------------------------Inicio do menu perfil --------------------------------------------------------------------- -->
<div class="container demo">
  <div class="modal right fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#2e75b6">
          <h5 class="modal-title" style="color:#fff">Perfil</h5>
          <img  src="img/perfil.png" width="42" height="32" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <!-- corpo do modal -->
        <div class="modal-body">
       
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-12 mb-6">
      <label for="validationCustom01">Nome</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
    </div>
  </div>


  <div class="form-row">

    <div class="col-md-12 mb-6">
      <label for="validationCustomUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

      </div>
    </div>
  </div>
  <div class="form-row">

<div class="col-md-12 mb-6">
  <label for="validationCustomUsername">Senha</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupPrepend">*</span>
    </div>
    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Senha" aria-describedby="inputGroupPrepend" required>

  </div>
</div>
<div class="col-md-12 mb-6">
  <label for="validationCustomUsername">Confirmar Senha</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupPrepend">*</span>
    </div>
    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Confirmar Senha" aria-describedby="inputGroupPrepend" required>
  </div>
</div>
</div>

</form>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" data-dismiss="modal">Salvar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- container -->
</div>
<!-- ---------------------------------fim do menu perfil --------------------------------------------------------------------- -->
</body>

<style>
  #home{

    margin-top: 60px;

  }



    body {
  padding-bottom: 30px;
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
  transition: all 0.5s ease;
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
  background: #006666; /* body do menu  */
  transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
  width: 250px;
}

.sidebar-brand {
  position: absolute;
  top: 0;
  width: 250px;
  text-align: center;
  padding: 20px 0;
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
.sidebar-nav > li {
  text-indent: 10px;
  line-height: 42px;
}
.sidebar-nav > li a {
  display: block;
  text-decoration: none;
  color: #fff;
  font-weight: 600;
  font-size: 18px;
}
.sidebar-nav > li > a:hover,
.sidebar-nav > li.active > a {
  text-decoration: none;
  color: #fff;
  background: #537777;  /* cor de selecao menu*/
}
.sidebar-nav > li > a i.fa {
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
  background-color: #2e75b6; /*cor do cabeçalho*/
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
  #sidebar-wrapper {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  overflow-x: hidden;
  background: #006666; /* body do menu  */
  transition: all 0.5s ease;
}
 #nomeuser{
  
  display: none;
}
.container-fluid{
  
  padding-left: 0px;
  padding-right: 0px;
}

  #esconde{
  
    display: none!important; 
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
	width: 320px; /* tamanho do modal */
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
  -webkit-box-shadow: -9px 0px 25px 0px rgba(0,0,0,0.3);
  -moz-box-shadow: -9px 0px 25px 0px rgba(0,0,0,0.3);
  box-shadow: -9px 0px 25px 0px rgba(0,0,0,0.3);
}

/* ----- MODAL STYLE ----- */
.modal-content {
	border-radius: 0;
	border: none;
}

.modal-header {
	border-bottom-color: #eeeeee;
	background-color: #fafafa;
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
	background-color: #ffffff;
}

.btn-demo:focus {
	outline: 0;
}

.modal-backdrop{
  background-color:#fff;
}


.modal-backdrop.show{
  opacity: .6;
}

</style>
<!-- mostrar  menu -->
<script>
    const $button  = document.querySelector('#sidebar-toggle');
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
    if(display == "none") {
        document.getElementById(el).style.display = 'block';
     
    }
    else {
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
</html>