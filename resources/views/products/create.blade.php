@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <h1 class="mb-5">Create new Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" name="title" id="title" type="text" value="{{ old('title') }}">
                @error('title') 
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="10">{{ old('description') }}</textarea>
                @error('description') 
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <h4>tags:</h4>

                @foreach($tags as $tag)
                    <span class="me-3 d-inline-block">
                        <input type="checkbox" name="tags[]" id="tag{{ $loop->iteration }}" value="{{ $tag->id }}" 
                        @if(in_array($tag->id, old('tags', []))) checked @endif
                        >
                        <label for="tag{{ $loop->iteration }}">{{ $tag->name }}</label>
                    </span>
                @endforeach

                @error('tags') 
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <input class="btn btn-primary" type="submit" value="Create Product">

        </form>

    </div>
</main>
@endsection