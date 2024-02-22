@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List des Directeurs') }}</div>

                <div class="card-body overflow-scroll">

                    <a href="{{ route('directeurs.create') }}" class="btn btn-primary">Add</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>

                                <th scope="col">Image</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($directeurs as $directeur)
                            <tr>
                                <td>{{ $directeur->name }}</td>
                                <td>{{ $directeur->email }}</td>
                                <td>{{ $directeur->phone }}</td>
                                <td><img src="{{ asset('uploads/directeurs') }}/{{ $directeur->image }}" width="100" height="100" alt="image"></td>

                                <td class="d-flex">
                                    <a href="{{ route('directeurs.edit',[$directeur->id]) }}" class="btn btn-primary">Editer</a>
                                    <a href="{{ route('directeurs.show',[$directeur->id]) }}" class="btn btn-success">Voir</a>

                                    <form action="{{ route('directeurs.destroy',[$directeur->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
