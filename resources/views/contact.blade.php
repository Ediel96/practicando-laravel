
@extends('layout')

@section('title', 'Content')

@section('content')
    <h1>Content</h1>

    <form method="POST" action="{{route('contact')}}">
        <input type="name" placeholder="Nombre..."><br>
        <input type="email" name="email" placeholder="Email..."><br>
        <input name="subject" placeholder="Asunto..."><br>
        <textarea name="contect" placeholder="Mensaje..."></textarea><br>
        <button>Enviar</button>
    </form>

@endsection
