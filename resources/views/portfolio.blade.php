@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h1>Portafolio</h1>
        
    <lu>
        @if($portfolio)
            @foreach ($portfolio as $portfolioItem)

                <li> {{ $portfolioItem['title'] }} </li>;
            @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
        @endif 
    </lu>

@endsection

