@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter Un Enseignant') }}</div>

                <div class="card-body">

                    <form action="{{ route('enseignants.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" name="name" placeholder="Entrer le nom" required>
                            
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Entrer l'email" required>
                           
                            <label for="">Téléphone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Entrer le téléphone" required>
                            
                            <label for="">Profession</label>
                            <select name="profession" class="form-control" required>

                                <option value="">--Selectionner une section--</option>
                                    <option value="Data Sciences">Web Developpement</option>
                                    <option value="Mobile Developpement">Mobile Developpement</option>
                                    <option value="Desktop Developpement">Desktop Developpement</option>
                                    <option value="Data Sciences">Data Sciences</option>
                            </select>
                           
                            <label for="">Photo</label>
                            <input type="file" class="form-control" name="image" required>
                             
                            <div class="pt-2">

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('enseignants.index') }}" class="btn btn-primary">Retour</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
