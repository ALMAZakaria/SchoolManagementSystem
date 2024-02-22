@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter Un Etudiant') }}</div>

                <div class="card-body">

                    {{-- <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" class="form-control" name="name" placeholder="Entrer le nom" required>
                         
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Entrer l'email" required>
                         
                        <label for="">Téléphone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Entrer le téléphone" required>
                        
                        <label for="">Section</label>
                        <select name="section" class="form-control">
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
                            <a href="{{ route('students.index') }}" class="btn btn-primary">Retour</a>
                        </div>
                    </div>
                    </form> --}}
                    {{-- edit version --}}
                    <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <label for="">Téléphone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $student->phone }}">
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <label for="">Section</label>
                            <select name="section" class="form-control ">

                            <option value="">--Selectionner une section--</option>
                                <option value="Data Sciences">Web Developpement</option>
                                <option value="Mobile Developpement">Mobile Developpement</option>
                                <option value="Desktop Developpement">Desktop Developpement</option>
                                <option value="Data Sciences">Data Sciences</option>
                            </select>
                            @error('section')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <label for="">Photo</label>
                            <input type="file" class="form-control" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="pt-2">

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('students.index') }}" class="btn btn-primary">Retour</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
