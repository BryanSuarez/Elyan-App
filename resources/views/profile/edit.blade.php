@extends('templates.default')

@section('content')
<div class="row">
    <h3>Actualiza tu perfil</h3>
    <div class="col-lg-6">
        <form class="form-vertical" role="form" method="post" action="{{route('profile.edit')}}">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
                        <label for="nombres" class="control-label">
                            Nombres
                        </label>
                        <input type="text" name="nombres" class="form-control" id="nombres"
                        value="{{ Auth::user()->nombres ?: Request::old('nombres') }}">
                        @if($errors->has('nombres'))
                        <span class="help-block">{{$errors->first('nombres')}}</span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
                        <label for="apellidos" class="control-label">
                            Apellidos
                        </label>
                        <input type="text" name="apellidos" class="form-control" id="apellidos"
                        value="{{ Auth::user()->apellidos ?: Request::old('apellidos') }}">
                        @if($errors->has('apellidos'))
                        <span class="help-block">{{$errors->first('apellidos')}}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('localizacion') ? 'has-error' : ''}}">
                    <label for="localizacion" class="control-label">
                        Ingresa tu carrera y nivel
                    </label>
                    <input type="text" name="localizacion" class="form-control" id="localizacion"
                    value="{{ Auth::user()->localizacion ?: Request::old('localizacion') }}">
                    @if($errors->has('localizacion'))
                        <span class="help-block">{{$errors->first('localizacion')}}</span>
                        @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Actualizar Perfil
                    </button>
                </div>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </div>
        </form>
    </div>
</div>
@stop