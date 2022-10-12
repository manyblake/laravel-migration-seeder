@extends('layouts.app')

@section('metaTitle', 'Home')

@section('content')
<div class="container">
    <ul>
        @foreach ($trains as $train)
            <li>
                <p>Azienda: {{ $train->azienda }}</p>
                <p>Stazione di Partenza / Stazione di Arrivo:
                    {{ $train->stazione_di_partenza }} /
                    {{ $train->stazione_di_arrivo }}</p>
                <p>Orario di Partenza / Orario di Arrivo:
                    {{ $train->orario_di_partenza }} /
                    {{ $train->orario_di_arrivo }}</p>
                <p>Codice Treno: {{ $train->codice_treno }}</p>
                <p>Numero Carrozze: {{ $train->numero_carrozze }}</p>
            </li>
        @endforeach
    </ul>
</div>

@endsection