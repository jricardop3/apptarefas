@extends('layouts.app')
@section('content')
<div class="container text-center mt-5">
    <h1>Bem vindo a aplicação.</h1>
    @auth


        Oie, tudo bem com você {{$user = auth()->user()->name;}}?<hr>
        {{Auth::user()->id}}<hr>
        {{Auth::user()->name}}<hr>
        {{Auth::user()->email}}<hr>
    @endauth
    @guest
        <h2>Por favor, faça o login</h2>
    @endguest
</div>
@endsection