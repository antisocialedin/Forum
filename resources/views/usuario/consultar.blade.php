@extends('layouts.app')
@section('content')
    <div class="container">
        @include('usuario.__apptitle')
        <div class="tile">
            <div class="tile-body">
                <form action="{{url('usuario/listar')}}" method="GET">
                    @csrf
                    @include('usuario.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Listagem
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
