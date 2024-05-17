@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">App Tarefas</div>
                <div class="card-body">
                    
                    
                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Tarefa</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Data limite</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarefas as $tarefa)
                          <tr>
                            <th scope="row">{{$tarefa->tarefa}}</th>
                            <td>{{$tarefa->user_id}}</td>
                            <td>{{date('d/m/Y', strtotime($tarefa->data_conclusao))}}</td>
                            
                          </tr>
                          
                         
                          @endforeach
                        </tbody>
                      </table>
                      <nav>
                        <!-- Paginate feito a mão, evitando a quebra do layout padrão links do laravel 8+ -->
                        <ul class="pagination justify-content-center">
                          <li class="page-item">
                            <a class="page-link" href="{{$tarefas->PreviousPageUrl()}}">Previous</a>
                          </li>
                          @for($i = 1; $i <= $tarefas->lastPage(); $i++)
                          <li class="page-item {{$tarefas->currentPage() == $i ? 'active' : ''}}"><a class="page-link" href="{{$tarefas->url($i)}}">{{$i}}</a></li>
                          @endfor
                          <li class="page-item">
                            <a class="page-link" href="{{$tarefas->NextPageUrl()}}">Next</a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
