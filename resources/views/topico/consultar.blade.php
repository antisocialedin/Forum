@extends('layouts.app')
@section('content')
    <div class="container">
        @include('topico.__apptitle')
        <div class="tile">
            <div class="tile-body">
                <form action="{{url('topico/listar')}}" method="GET">
                    @csrf
                    @include('topico.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Voltar
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
