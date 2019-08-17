@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Time</th>
            <th scope="col">Acões</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pessoas as $pessoa)
        <tr>
            <th scope="row">{{ $pessoa->id }}</th>
            <td>{{ $pessoa->nome }}</td>
            <td>{{ $pessoa->time }}</td>
            <td>
                <button class="sucess">Visualizar</button>
                <button class="info">Editar</button>
                <button class="danger">Deletar</button>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    </div>
    </div>
@endsection
