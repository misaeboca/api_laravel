@extends('layouts/default')

@section('content')

<div class="container p-t-20 p-b-20">
    <div class="row p-t-10 ">
        <div class="col-md-4 login-box card">

            <div class="panel panel-default">
                <h4 class="box-title text-center font-16  p-b-10 p-t-20" >Cambiar Clave</h4>
                <form class="form-horizontal"  method="POST" action="{{ route('changePassword') }}">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="Correo electronico">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required placeholder="Clave">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar Clave">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="p-b-20">
                                <div class="col-md-12">
                                    <button class="form-control btn  btn-block text-uppercase waves-effect waves-light text-white" type="submit" style="background-color: #d5521c;">ENVIAR</button>
                                </div>
                            </div>

                </form>
               
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $("#_url_pagina").text('Cambiar Clave');
    $("#_titulo").text('Cambiar Clave');
    $(".page-titles").hide();
</script>
@endsection

