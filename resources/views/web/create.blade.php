@extends('web.layouts.app-layouts')

@section('title', 'Create a User')

@section('content')
    <div class="container py-4">
        <form action="{{ route('store-new-user') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label for="name">User name</label>
                <input type="text" id="name" name="name" required class="form-control" placeholder="Enter user name">
            </div>
            <div class="form-group mb-4">
                <label for="email">User email</label>
                <input type="email" id="email" name="email" required class="form-control" placeholder="Enter user email">
            </div>
            <div class="form-group mb-4">
                <label for="password">User password</label>
                <input type="password" id="password" name="password" required class="form-control" placeholder="Enter user password">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
