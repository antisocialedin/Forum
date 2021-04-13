@extends('layouts.app')
@section('content')
    <div class="container">
        @include('usuario.__apptitle')
        <div class="tile">
            <div class="tile-body">
                <form action="{{ url('usuario/salvar') }}" method="POST">
                    @csrf
                    @include('usuario.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Salvar Usuário
                        </button>
                        <a href="{{ url('usuario/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Cadastro</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
