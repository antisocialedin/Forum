@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="app-title">
            <h1>
                <i class="fa fa-edit">Excluir Topico</i>
            </h1>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="{{ url('/topico/listar') }}"> Pesquisa de Tópicos</a></li>
            </ul>
        </div>
        <div class="tile">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
            <div class="tile-body">
                <form action="{{ url('/topico/excluir', $registro->id) }}" method="POST">
                    @csrf
                    @include('topico.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Excuir Tópico
                        </button>
                        <a href="{{ url('/topico/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
