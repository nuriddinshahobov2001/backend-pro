@extends('web.layouts.app-layouts')

@section('title', 'Create a User')

@section('content')
    <div class="container py-4">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @else

        @endif
        <form action="{{ route('store-new-user') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label for="name">User name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter user name">

            </div>
            <div class="form-group mb-4">
                <label for="email">User email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter user email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="password">User password</label>
                <input type="password" id="password" name="password" class="form-control @error('password') border-danger @enderror" placeholder="Enter user password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
