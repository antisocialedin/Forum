@extends('layouts.app')
@section('content')
    <div class="container">
        @include('auth.usuario.__apptitle')
        <div class="tile">
            <div class="tile-body">
                <form action="{{ url('auth/usuario/salvar') }}" method="POST">
                    @csrf
                    @include('auth.usuario.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Salvar Usuário
                        </button>
                        <a href="{{ url('auth/usuario/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Cadastro</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
