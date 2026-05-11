@extends('web.layouts.app-layouts')

@section('title', 'Index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-end mt-2">
                <a href="{{ route('create-new-user') }}" class="btn btn-outline-primary">Create a new user</a>
            </div>

            @foreach($studentsList as $student)
                <div class="col-4 my-3">
                    <div class="card">
                        <div class="card-header">
                            <h1>ID : {{ $student->id }}</h1>
                        </div>
                        <div class="card-body">
                            <h6>Student name : {{ $student->name }}</h6>
                            <p>Student email : {{ $student->email }}</p>
                            <span class="badge bg-primary">{{ $student->created_at->format('d-m-Y H:i:m')    }}</span>
                        </div>
                        <div class="card-footer d-flex justify-content-end gap-2">
                            <button class="btn btn-primary">Изменить</button>
                            <button class="btn btn-danger">Удалить</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

