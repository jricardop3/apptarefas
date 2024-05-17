@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar tarefas</div>
                <div class="card-body">
                    <form method="post" action="{{route ('tarefa.store')}}">
                        @csrf
                    <div class="mb-3">
                        <label class="form-label">Tarefa</label>
                        <input type="text" class="form-control" name="tarefa">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Data limite Tarefa </label>
                        <input type="date" class="form-control" name="data_conclusao">
                    </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
