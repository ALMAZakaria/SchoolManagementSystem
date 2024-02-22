@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List des Bibliotheque') }}</div>

                <div class="card-body overflow-scroll">

                    <a href="{{ route('libraries.create') }}" class="btn btn-primary">Add</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Description</th>
                                <th scope="col">Number of Books</th>

                                <th scope="col">Image</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($libraries as $library)
                            <tr>
                                <td>{{ $library->name }}</td>
                                <td>{{ $library->description }}</td>
                                <td>{{ $library->number_of_books }}</td>
                                <td><img src="{{ asset('uploads/libraries') }}/{{ $library->image }}" width="100" height="100" alt="image"></td>

                                <td class="d-flex">
                                    <a href="{{ route('libraries.edit',[$library->id]) }}" class="btn btn-primary">Editer</a>
                                    <a href="{{ route('libraries.show',[$library->id]) }}" class="btn btn-success">Voir</a>

                                    <form action="{{ route('libraries.destroy',[$library->id]) }}" method="POST">
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
