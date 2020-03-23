<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')


<body>
@section('titlePage', 'Registrar')
    <div id="login-page">
        <div class="container">
            <form method="POST" class="form-login" action="{{ route('register') }}">
                @csrf
                <h2 class="form-login-heading">Registrar</h2>
                <div class="login-wrap">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo Electronico" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>


                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre de Usuario" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>


                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma tu contraseña">
                    <br>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Regisrarte</button>
                    <button class="btn btn-danger btn-block" type="reset"><i class="fa fa-lock"></i> Cancelar</button>
                    <hr>
                    <div class="registration">
                        Ya tienes cuenta?<br />
                        <a class="" href="/login">
                            Ingresa
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("", {
            speed: 500
        });
    </script>

</body>

</html>