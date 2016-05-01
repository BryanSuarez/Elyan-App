@extends('templates.default')

@section('content')
<h3>La búsqueda para: "{{Request::input('query') }}"</h3>
@if (!$users->count())
    <p>No se ha encontrado resultados con su búsqueda</p>
@else
<div class="row">
    <div class="col-lg-12">
        @foreach($users as $user)
            @include('user/partials/userblock')
        @endforeach

    </div>
</div>
@endif
@stop
