<div class="media">
    <a class="pull-left" href="{{ route('profile.index',['nombreusuario' => $user->nombreusuario]) }}">
        <img class="media-object" alt="{{ $user->getNameOrUserName() }}" 
             src="{{$user->getAvatarUrl()}}">
    </a>
    <div class="media-body">
        <h4 class="media-heading"><a href="{{ route('profile.index',['nombreusuario' => $user->nombreusuario]) }}">
                {{ $user->getNameOrUserName() }}</a></h4>
        @if($user->localizacion)
        <p>{{$user->localizacion}}</p>
        @endif
    </div>
</div>