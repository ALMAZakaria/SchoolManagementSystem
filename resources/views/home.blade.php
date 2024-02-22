@extends('layout')
@section('content')
<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card">
            <a href="{{ route('students.index') }}">
                <img src="img/student.jpg"  width="175" height="175" alt="student-img">
            </a>
            <div class="card-body">
                <h5 class="card-title">Students</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
             <a href="{{ route('enseignants.index') }}">
                 <img src="img/teacher.png" width="175" height="175" alt="teacher-img">
            </a>
            <div class="card-body">
                <h5 class="card-title">Teachers</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <a href="{{ route('libraries.index') }}">
                <img src="img/library.png" width="175" height="175" alt="library-img">
            </a>
            <div class="card-body">
                <h5 class="card-title">Libraries</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <a href="{{ route('directeurs.index') }}">
                <img src="img/administrator.png" width="175" height="175" alt="teacher-img">
            </a>
            <div class="card-body">
                <h5 class="card-title">Administrators</h5>
            </div>
        </div>
    </div>
</div>
@endsection