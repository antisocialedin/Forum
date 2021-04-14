@extends('layouts.app')
@section('content')
    <div class="container">
        @include('comunidade.__apptitle')
        <div class="tile">
            <div class="tile-body">
                <form action="{{ url('comunidade/salvar') }}" method="POST">
                    @csrf
                    @include('comunidade.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Criar Comunidade
                        </button>
                        <a href="{{ url('comunidade/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Cadastro</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
