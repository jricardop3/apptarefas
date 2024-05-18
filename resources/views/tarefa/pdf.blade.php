<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h2>Lista de tarefas:</h2>
<table border="1px" style="width: 100%;">
    <thead>
        <th>Id tarefa</th>
        <th>ID usuario</th>
        <th>Tarefa</th>
        <td>Data Limite</td>
        <td>Data Criação</td>
        <td>Data Atualização</td>
    </thead>
    <tbody>
        @foreach ($tarefas as $tarefa)
        <tr>
            <td>{{$tarefa->id}}</td>
            <td>{{$tarefa->user_id}}</td>
            <td>{{$tarefa->tarefa}}</td>
            <td>{{date('d/m/y', strtotime($tarefa->data_conclusao))}}</td>
            <td>{{date('d/m/y', strtotime($tarefa->created_at))}}</td>
            <td>{{date('d/m/y', strtotime($tarefa->updated_at))}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>