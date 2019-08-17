@extends('layouts.app')
@section('content')
    <div class="container">
<div class="col-md-12">
A {{$pessoa->nome}} torce para o <strong> {{$pessoa->time}}</strong>
</div>
    </div>
@endsection
