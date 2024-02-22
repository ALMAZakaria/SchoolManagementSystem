@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">{{ __('List des Enseignants') }}</div>

                <div class="card-body overflow-scroll">

                    <a href="{{ route('enseignants.create') }}" class="btn btn-primary">Add</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Profession</th>
                                <th scope="col">Image</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enseignants as $enseignant)
                            <tr>
                                <td>{{ $enseignant->name }}</td>
                                <td>{{ $enseignant->email }}</td>
                                <td>{{ $enseignant->phone }}</td>
                                <td>{{ $enseignant->profession }}</td>
                                <td><img src="{{ asset('uploads/enseignants') }}/{{ $enseignant->image }}" width="100" height="100" alt="image"></td>

                                <td class="d-flex">
                                    <a href="{{ route('enseignants.edit',[$enseignant->id]) }}" class="btn btn-primary">Editer</a>
                                    <a href="{{ route('enseignants.show',[$enseignant->id]) }}" class="btn btn-success">Voir</a>

                                    <form action="{{ route('enseignants.destroy',[$enseignant->id]) }}" method="POST">
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
