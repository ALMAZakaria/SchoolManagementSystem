@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Afficher Un Bibliotheque') }}</div>

                <div class="card-body d-flex justify-content-center">

                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('uploads/libraries') }}/{{ $library->image }}" class="rounded-circle" width="100" height="100">
                            <h3>{{$library->name}}</h3>
                            <h5>Description : {{$library->description}}</h5>
                            <h5>Num de Livres : {{$library->number_of_books}}</h5>
                            <a href="{{ route('libraries.index') }}" class="btn btn-primary">Retour</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
