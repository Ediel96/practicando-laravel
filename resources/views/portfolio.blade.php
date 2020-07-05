@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h1>Portafolio</h1>

    <lu>
        @if($portfolio)
            @foreach ($portfolio as $portfolioItem)

                <li> <a href="{{route('porfolio.shwo')}}">{{ $portfolioItem->title }}</a></li>;
            @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
        @endif
    </lu>

@endsection

