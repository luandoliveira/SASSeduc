<html lang="pt-Br">
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div id="centralizar2" class="row d-flex justify-content-center">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png"
                        class="alinhar img-fluid" alt="Sample image">
                </div>

                <div id="centralizar" class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <div>
                        <h2>Registrar </h2>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Register buttons -->

                        <div class="text-center">
                            <p>Inscreva-se com</p>

                            <a href="{{route('auth.google')}}"><img id="size-img" src="img/googleIcon.png"></img>
                            </a>
                        </div>
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Ou</p>
                        </div>

                        <br>
                        <div class="row mb-5">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Nome" />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label class="form-label" for="form3Example1">Primeiro Nome</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="lastName" name="lastName" class="form-control"
                                        placeholder="Sobre nome" />
                                    <label class="form-label" for="form3Example2">Sobrenome</label>
                                </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control" placeholder="E-mail" @error('email')
                                is-invalid @enderror" name="email" value="{{ old('email') }}" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="form-label" for="form3Example3">Email</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form3Example4" class="form-control" placeholder="Senha"
                                @error('password') is-invalid @enderror" name="password" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="form-label" for="form3Example4">Senha</label>
                        </div>

                        <!-- Confirm Password input -->
                        <div class="form-outline mb-4">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirmar senha" />
                            <label class="form-label" for="form3Example4">Confirmar Senha</label>
                        </div>

                        <!--       

        <div class="text-center text-lg-start mt-4 pt-2">
          <button type="button" class="btn btn-primary btn-lg"
            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
        </div> -->
                        <div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4"
                                style="padding-bottom: 0.7rem;padding-top:0.7rem;">Registrar</button>

                            <div class="divider d-flex align-items-center my-4">

                            </div>


                        </div>


                    </form>
                </div>
            </div>
        </div>
        <div id="footer"
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2020.
            </div>
            <!-- Copyright -->

            <!-- Right -->

            <div>

                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>

            </div>
            <!-- Right -->
        </div>
    </section>
</body>

</html>

<style>
#centralizar2 {
    padding-right: 0px;


}

#centralizar {
    padding-left: 0px;
    margin-left: 50px;

}

#size-img {
    width: 30px;
    height: 30px;

}

.form-control {
    padding-bottom: 25px;
    padding-top: 25px;
}


.container-fluid {

    padding-top: 70px;
}

h2 {

    margin-bottom: 50px;
    margin-block-end: 50px;

}


/* #centralizar2{
    
} */


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
    #footer {
        margin-top: 350px;

    }

    h2 {
        margin-bottom: 0px;

    }

    .container-fluid {

        padding-top: 0px;
    }

    #ajuste2 {
        padding-left: 15px;


    }

    #ajuste1 {
        padding-right: 15px;


    }


    #form3Example4 {
        padding-bottom: 0x;

    }

    #centralizar2 {
        padding-right: 0px;


    }

    #centralizar {
        padding-left: 0px;
        margin-left: 15px;

    }

    h2 {

        margin-bottom: 15px;


    }




}
</style>