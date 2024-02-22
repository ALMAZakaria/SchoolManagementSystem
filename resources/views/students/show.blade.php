@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Afficher des Etudiants') }}</div>

                <div class="card-body d-flex justify-content-center">
                    {{-- show image in rounded and belo the name in large and the email and phone below the name in small with the section --}}

                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('uploads/students') }}/{{ $student->image }}" class="rounded-circle" width="100" height="100">
                            <h3>{{$student->name}}</h3>
                            <h5>{{$student->email}}</h5>
                            <h5>{{$student->phone}}</h5>
                            <h5>{{$student->section}}</h5>
                            {{-- back button --}}
                            <a href="{{ route('students.index') }}" class="btn btn-primary">Retour</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
