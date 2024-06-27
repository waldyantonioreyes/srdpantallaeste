@extends('layout.app')

@section('title', 'Inicio')

@section('content')

    @foreach ($resultados as $resultado)
    @endforeach


    <x-loteria titulo="Loto Pool Real" imagen="lotopoolreal.png" fecha="04/20/2023" numeros={{ $resultado->num1 }} />


    <div class="col">

        <div class="" style="height: 250px"></div>

    </div>



@endsection
