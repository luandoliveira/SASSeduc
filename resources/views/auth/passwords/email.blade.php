<html lang="pt-Br">
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<head>
  <title>Recuperar Senha</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<section class="vh-100">
<div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center ">
      <div id="ajuste1"> <!-- class="col-md-9 col-lg-6 col-xl-5" -->
          <img  id="ajuste3" src="/img/logo.png" class="img-fluid">
        </div>
        <div  id="ajuste2" class="col-md-10 col-lg-6 col-xl-4 offset-xl-1">
            <div>
                <h2>Redefinir Senha </h2>
              </div>
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
          <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class=" d-flex align-items-center my-4">
            </div>
            <!-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Fazer Login com </p> &nbsp
              <a href="www.google.com"><img id="size-img" src="img/googleIcon.png"
                ></img>
                </a>
  
              
  
            </div> 
  
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Ou</p>
            </div>
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Endere??o de Email</label>
              <input type="email" id="form3Example3" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                placeholder="E-mail" />
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn"
                style="padding-left: 3rem; padding-right: 2.5rem; padding-bottom: 0.7rem;padding-top:0.7rem;background-color:#002e5e;color:#fff;">Enviar redefini????o de senha</button>
              <!-- <p class="small fw-bold mt-2 pt-1 mb-0">N??o possui uma conta? <a href="#!"
                
                  class="link-danger">Registrar</a>. J?? possui? <a href="#!"
                
                  class="link-danger">Entrar</a></p> -->
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="footer" class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-2  px-xl-5">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
      <img width="85px;"  src="{{asset('img/seduc.png')}}" class="img-fluid">
      </div>
      <!-- Copyright -->
      <div style="padding-top:10px;padding-bottom:10px;">  Copyright ?? 2021.
  <a >Seduc-AM. Todos os Direitos Reservados</a> </div>
    
      <!-- Right -->
      <div>
        <img width="130px;"  src="{{asset('img/governo.png')}}" class="img-fluid">
      </div>
      <!-- Right -->
    </div>
  </section>
</body>
</html>
  <style>
#footer{
  background-color: #002e5e;
  color:#fff;
  margin-top: 11px;

}
#ajuste1{
 padding-right: 0px;
}
#ajuste2{
 padding-left: 0px;
 margin-left: 0px;
 margin-top: 100px;
}
#ajuste3{
margin-right: 50px;
margin-top: 50px;
width: 400px;
height: 400px;
}
.container-fluid{
padding-top: 70px;
}
h2{
margin-bottom: 50px;
margin-block-end: 50px;
}
.divider:after,
.divider:before {
  content: "";
  flex: 1;
  height: 1px;
  background: #eee;
}
.h-custom {
  height: calc(100% - 73px);
}
@media (max-width: 450px) {
  .h-custom {
    height: 100%;
  }
}
@media screen and (max-width: 770px) {
h2{
  text-align: center;
      margin-bottom: 0px;
    }
.container-fluid{
     padding-top: 0px;
   
}


#ajuste3{
width: 150px;
height: 150px;
margin-right: 0px;
}
#ajuste1{

 padding-right: 15px;
 padding-right:0px;
}
#ajuste2{
 padding-left: 15px;
}
#ajuste1{
 padding-right: 15px;
}
 #form3Example3
{
  padding-bottom: 0px;
}
}
  </style>