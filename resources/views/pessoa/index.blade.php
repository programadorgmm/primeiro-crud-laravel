@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
@foreach($pessoas as $pessoa)
    {{$pessoa->nome}} -> {{$pessoa->time}}<br>

@endforeach
    </div>
    </div>
@endsection
