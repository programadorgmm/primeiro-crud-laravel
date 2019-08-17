@extends('layouts.app')
@section('content')
    <div class="container">
        <form action=" {{ route('pessoas.update',['pessoa' => $pessoa->id]) }}" class="form-horizontal" method="POST">
            @csrf
            <div class="row">
                <div class="form-group">
                <label>Nome Pessoa</label>
                <input type="text" class="form-control" name="nome" value="{{ old ('pessoa', $pessoa->nome) }}">
            </div>
            </div>
            <div class="row">
                <div class="form-group">
                <label>Time</label>
                <input type="text" class="form-control" name="time" value="{{ old ('pessoa', $pessoa->time) }}">
            </div>
            </div>
            <div class="row">
                <div class="form-group">
                <button type="submit" class="btn btn-info">Cadastrar Pessoa</button>
            </div>
            </div>
        </form>
    </div>

@endsection
