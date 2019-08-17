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
                            <a href="{{ route('pessoas.show',['pessoa' => $pessoa->id]) }}"><button class="btn-success">Visualizar</button></a>
                            <a href="{{ route('pessoas.edit',['pessoa' => $pessoa->id]) }}"><button class="btn-info">Editar</button></a>
                            <a href="#"><button class="btn-danger">Deletar</button></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
