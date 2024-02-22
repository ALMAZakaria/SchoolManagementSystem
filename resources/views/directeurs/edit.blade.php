@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editer Un Directeur') }}</div>

                <div class="card-body">

                    <form action="{{ route('directeurs.update', $directeur->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" name="name" value="{{ $directeur->name }}" required>
                             
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $directeur->email }}" required>
                             
                            <label for="">Téléphone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $directeur->phone }}" required>
                            

                            <label for="">Photo</label>
                            <input type="file" class="form-control" name="image" required>
                             
                            <div class="pt-2">

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('directeurs.index') }}" class="btn btn-primary">Retour</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
