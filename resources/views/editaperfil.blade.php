@extends('templates.navtemplate')

@section('content')
<!-- @if (session('success'))
    <div class="alert alert-success">
          {{session('success')}}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
          {{session('error')}}
    </div>
@endif -->

<div class=" d-none alert alert-success" id="success" role="success"></div>
<div class="d-none alert alert-danger" id="error" role="alert"></div>

<form name="formEdit">
  @csrf
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" placeholder="Nome" class="form-control" value="{{auth()->user()->name}}">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="E-mail" class="form-control" value="{{auth()->user()->email}}">
    </div>
    <div class="form-group">
    <label for="password">Senha</label>
        <input type="password" id="senha" name="password" placeholder="Senha" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Atualizar Perfil</button>
    </div>
</form>



<style>
body {
    font-family: "Poppins", sans-serif;
    background-color: #fafafa;
}

.row {
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    border-radius: 5px;
    box-shadow: 7px 7px 13px 0px rgba(50, 50, 50, 0.22);
    padding: 30px;
    margin: 20px;
    width: 400px;
    transition: all 0.3s ease-out;
}

.card:hover {
    transform: translateY(-5px);
    cursor: pointer;
}

.card p {
    color: #a3a5ae;
    font-size: 16px;
}

.image {
    float: right;
    max-width: 64px;
    max-height: 64px;
}

.blue {
    border-left: 3px solid #008080;
}

.green {
    border-left: 3px solid #008080;
}

.red {
    border-left: 3px solid #008080;
}
</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

<script>
    $(function(){
       $('form[name="formEdit"]').submit(function(event){
         event.preventDefault();

         $.ajax({
            url: "{{route('profile.update')}}",
            type: "post",
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response){
              console.log(response);

              if (response.success === true) {
                //redirecionar
                $('#success').removeClass('d-none').html(response.message);
              } else {
                $('#error').removeClass('d-none').html(response.message);
              }
            }
         });
         
         
	        /* action="{{route('profile.update')}}" method="POST" */
       }); 
    });
</script>
@endsection