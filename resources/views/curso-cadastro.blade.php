@extends('adminlte::page')

@section('title', 'Cadastro de Curso')

@section('content_header')
    <h1>Cadastro de Curso</h1>
@stop

@section('content')
    <form action="{{route('curso.salvar')}}" method="post">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif  

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{old('nome')}}" required autofocus maxlength="60">
        <button>Salvar</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop