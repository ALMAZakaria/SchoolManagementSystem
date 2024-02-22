@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Afficher Un Enseignant') }}</div>

                <div class="card-body d-flex justify-content-center">

                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('uploads/enseignants') }}/{{ $enseignant->image }}" class="rounded-circle" width="100" height="100">
                            <h3>{{$enseignant->name}}</h3>
                            <h5>{{$enseignant->email}}</h5>
                            <h5>{{$enseignant->phone}}</h5>
                            <h5>{{$enseignant->profession}}</h5>

                            <a href="{{ route('enseignants.index') }}" class="btn btn-primary">Retour</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
