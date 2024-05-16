@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique o endereço de e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link re-enviado, por favor veja sua caixa de e-mail..') }}
                        </div>
                    @endif

                    {{ __('Por favor, verifique seu e-mail no link enviado.') }}
                    {{ __('se você não recebeu o email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui para re-enviar o link, no seu e-mail.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
