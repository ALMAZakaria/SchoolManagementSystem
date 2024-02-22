@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter Un Biblioteque') }}</div>

                <div class="card-body">

                    <form action="{{ route('libraries.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" name="name" placeholder="Entrer le nom"required>
                            
                            <label for="">Description</label>
                            <input type="description" class="form-control" name="description" placeholder="Entrer la description" required>
                             
                            <label for="">Num de Livres</label>
                            <input type="number" class="form-control" name="number_of_books" placeholder="Entrer le Numero de livres" required>
                             
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
