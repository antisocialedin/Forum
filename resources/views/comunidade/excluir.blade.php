@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="app-title">
            <h1>
                <i class="fa fa-edit">Excluir Comunidade</i>
            </h1>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="{{ url('/comunidade/listar') }}"> Pesquisa de Comunidades</a></li>
            </ul>
        </div>
        <div class="tile">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
            <div class="tile-body">
                <form action="{{ url('/comunidade/excluir', $registro->id) }}" method="POST">
                    @csrf
                    @include('comunidade.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Excuir Comunidade
                        </button>
                        <a href="{{ url('/comunidade/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
