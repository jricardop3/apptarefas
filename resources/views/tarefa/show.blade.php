@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$tarefa->tarefa}}</div>
                <div class="card-body">
                    <div class="mb-3">
                        <fieldset disabled>
                        <label  class="form-label">Data limite Tarefa</label>
                        <input type="date" class="form-control" name="data_conclusao" value="{{$tarefa->data_conclusao}}">
                        </fieldset>
                    </div>
                    <a href="{{url()->previous()}}" type="submit" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
