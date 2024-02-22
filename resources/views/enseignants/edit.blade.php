@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter Un Enseignant') }}</div>

                <div class="card-body">

                    <form action="{{ route('enseignants.update', $enseignant->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" name="name" value="{{ $enseignant->name }}" required>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $enseignant->email }}" required>
                             
                            <label for="">Téléphone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $enseignant->phone }}" required>
                             
                            <label for="">Profession</label>
                            <select name="profession" class="form-control">

                                <option value="">--Selectionner une profession--</option>
                                    <option value="Data Sciences"  {{ $enseignant->profession == 'Data Sciences' ? 'selected' : '' }}>Web Developpement</option>
                                    <option value="Mobile Developpement" {{ $enseignant->profession == 'Mobile Developpement' ? 'selected' : '' }}>Mobile Developpement</option>
                                    <option value="Desktop Developpement" {{ $enseignant->profession == 'Desktop Developpement' ? 'selected' : '' }}>Desktop Developpement</option>
                                    <option value="Réseaux Informatique" {{ $enseignant->profession == 'Réseaux Informatique' ? 'selected' : '' }}>Data Sciences</option>
                            
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
