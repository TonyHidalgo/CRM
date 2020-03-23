<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')
@section('titlePage', 'Ingresar')

<body>
    <div id="login-page">
        <div class="container">
            <form method="POST" class="form-login" action="{{ route('login') }}">
                @csrf
                <h2 class="form-login-heading">Ingresar</h2>
                <div class="login-wrap">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Nombre de Uruario" autofocus>
                    @error('email')
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
                    <label class="checkbox">
                        @if (Route::has('password.request'))
                        <a data-toggle="modal" id="login.html#myModaldebo modificar" href="{{ route('password.request') }}"> Olvidaste tu contraseña?</a>
                        @endif
                        <span class="pull-right">
                            <input type="checkbox" value="remember-me" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> INGRESAR</button>
                    <hr>
                    <div class="registration">
                        Aun no tienes cuenta?<br />
                        <a class="" href="/register">
                            Crear una cuenta
                        </a>
                    </div>
                </div>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Olvidaste tu contraseña ?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Ingresa tu correo y te enviaremos un link para recuperarla.</p>
                                <input type="text" name="email" placeholder="Correo Electronico" autocomplete="off" class="form-control placeholder-no-fix">
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                                <button class="btn btn-theme" type="button">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->
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