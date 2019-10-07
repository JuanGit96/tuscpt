@extends('layouts.general')
@section('content')

<div class="container">
    <div class="jumbotron gracias" style="margin-top: 120px;">
        <h1>Su pago ha sido {{$resultado}}</h1>
        <p>Por favor vuelva a intentarlo</p>
        <a href="{{url('/')}}">Volver a intentar</a>
    </div>
</div>
@endsection

