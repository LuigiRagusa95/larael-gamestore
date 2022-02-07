@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>{{ $product->title }}</h1>
        <p>{{ $product->description }}</p>

        @if(! $product->tags->isEmpty())      
            <div>Tags</div>
            @foreach ($product->tags as $tag)
                <span class="badge bg-primary">
                    {{ $tag->name }}
                </span>
            @endforeach
        @else
            <div>No Tags</div>
        @endif
    </section>
@endsection