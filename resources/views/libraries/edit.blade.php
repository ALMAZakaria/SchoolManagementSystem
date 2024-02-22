@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editer Un Bibliotheque') }}</div>

                <div class="card-body">

                    <form action="{{ route('libraries.update', $library->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" name="name" value="{{ $library->name }}" required>
                             
                            <label for="">Description</label>
                            <input type="description" class="form-control" name="description" value="{{ $library->description }}" required>
                             
                            <label for="">Num de Livres</label>
                            <input type="text" class="form-control" name="number_of_books" value="{{ $library->number_of_books }}" required>
                             

                            <label for="">Photo</label>
                            <input type="file" class="form-control" name="image" required>
                             
                            <div class="pt-2">

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('libraries.index') }}" class="btn btn-primary">Retour</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
