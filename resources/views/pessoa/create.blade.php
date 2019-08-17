@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="#" class="form-horizontal">
            <div class="row">
                <div class="form-group">
                <label>Nome Pessoa</label>
                <input type="text" class="form-control" name="nome">
            </div>
            </div>
            <div class="row">
                <div class="form-group">
                <label>Time</label>
                <input type="text" class="form-control" name="time">
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
