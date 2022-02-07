@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Title here</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Title
                    </th>
                    <th colspan="3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }} </td>
                        <td>{{ $product->title }} </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">Show</a>
                        </td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection