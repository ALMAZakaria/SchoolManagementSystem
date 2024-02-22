@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List des Etudiants') }}</div>

                <div class="card-body overflow-scroll" >

                    <a href="{{ route('students.create') }}" class="btn btn-primary">Add</a>

                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Section</th>
                                <th scope="col">Image</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->section }}</td>
                                <td><img src="{{ asset('uploads/students') }}/{{ $student->image }}" width="100" height="100" alt="image"></td>

                                <td class="d-flex">
                                    <a href="{{ route('students.edit',[$student->id]) }}" class="btn btn-primary">Editer</a>
                                    <a href="{{ route('students.show',[$student->id]) }}" class="btn btn-success">Voir</a>

                                    <form action="{{ route('students.destroy',[$student->id]) }}" method="POST">
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
