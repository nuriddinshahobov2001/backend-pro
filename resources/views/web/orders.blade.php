@extends('web.layouts.app-layouts')

@section('title', 'Order')

@section('content')
    <h1>Order list</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Order number</th>
            <th scope="col">User</th>
            <th scope="col">Product</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name }}</td>
                <td> {{ $order->product->name. ' - '. $order->product->price . ' smn' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
