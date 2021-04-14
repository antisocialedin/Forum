@extends('layouts.app')
@section('content')
    <div class="container">
        @include('comunidade.__apptitle')
        <div class="tile">
            <div class="tile-body">
                <form action="{{url('comunidade/listar')}}" method="GET">
                    @csrf
                    @include('comunidade.__form')
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
