@component('mail::message')
# {{$tarefa}}

Data limite conclussão: {{$data_conclusao}}

@component('mail::button', ['url' => $url])
{{$tarefa}}
@endcomponent

Crescer.Tech,<br>
{{ config('app.name') }}
@endcomponent
