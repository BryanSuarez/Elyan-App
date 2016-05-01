@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-lg-5">
            @include('user.partials.userblock')
            <hr>

            @if(!$estados->count())
                <p> {{ $user->getFirstNameOrUsername() }} aún no ha publicado nada.</p>
            @else
                @foreach($estados as $estado)
                    <div class="media">
                        <a class="pull-left"
                           href="{{ route('profile.index',['nombreusuario'=> $estado->user->nombreusuario]) }}">
                            <img class="media-object" alt="{{ $estado->user->getNameOrUsername() }}"
                                 src="{{ $estado->user->getAvatarUrl() }}">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a
                                        href="{{ route('profile.index',['nombreusuario'=> $estado->user->nombreusuario]) }}">
                                    {{ $user->getNameOrUsername() }}
                                </a></h4>
                            <p>{{ $estado->comentario }}</p>
                            <ul class="list-inline">
                                @if($estado->user->id !== Auth::user()->id)
                                    <li>
                                        <a href="{{route('status.like', ['estadoId' => $estado->id ])}}">Me
                                            gusta</a>
                                    </li>
                                @endif
                                <li>{{$estado->likes->count()}} {{ str_plural('like' , $estado->likes->count()) }}</li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                    @if($authUserIsFriend || Auth::user()->id === $estado->user->id)
                            <!-- FORMULARIO DE RESPUESTA A POST -->
                    <form role="form" action="{{route('status.reply', ['estadoId' => $estado->id])}}" method="post">
                        <div class="form-group{{$errors->has("reply-{$estado->id}") ? 'has-error': ''}}">
                                    <textarea name="reply-{{ $estado->id }}" class="form-control" rows="2"
                                              placeholder="Opina sobre este estado"></textarea>
                            @if ($errors->has("reply-{$estado->id}"))
                                <span class="help-block">{{$errors->first("reply-{$estado->id}")}}
                                    ></span>
                            @endif
                        </div>
                        <input type="submit" value="Responder"
                               class="btn btn-info btn-sm">

                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form><!-- FORMULARIO DE RESPUESTA A POST -->
                    @endif

                    @endif


        </div>


        <div class="col-lg-4 col-lg-offset-3">
            @if(Auth::user()->hasFriendRequestPending($user) )
                <p>Espera que <strong>{{ $user->getNameOrUsername() }}</strong> acepte tu solicitud de amistad.</p>

            @elseif (Auth::user()->hasFriendRequestRecived($user))
                <a href=" {{ route('friend.accept',['nombreusuario'=> $user->nombreusuario ]) }} "
                   class="btn btn-success">Aceptar Solicitud de Amistad</a>

            @elseif(Auth::user()->isFriendsWith($user) )
                <p><strong>{{ $user->getNameOrUsername() }}</strong> y tú, ya son amigos.</p>

            @elseif(Auth::user()->id !== $user->id )
                <a href="{{ route('friend.add', ['nombreusuario'=> $user->nombreusuario]) }}" class="btn btn-primary">Agregar
                    como amigo.</a>
            @endif
            <h4>Los amigos de <strong> "{{ $user->getFirstNameOrUsername() }}"</strong> son:</h4>

            @if(! $user->friends()->count() )
                <p>El usuario <strong>{{ $user->getFirstNameOrUsername() }}</strong> aún no tiene amigos en su red. </p>
            @else
                @foreach($user->friends() as $user)
                    @include('user.partials.userblock')
                @endforeach
            @endif
        </div>
    </div>
@stop