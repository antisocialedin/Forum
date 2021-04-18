@extends('layouts.app')
@section('content')
    <div class="container">
        @include('topico.__apptitle')
        <div class="tile">
            <div class="tile-body">
                <form action="{{ url('topico/salvar') }}" method="POST">
                    @csrf
                    @include('topico.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Criar Tópico
                        </button>
                        <a href="{{ url('topico/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
