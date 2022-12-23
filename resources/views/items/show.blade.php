@extends('layout.master')

@section('title', $movie->title)

@section('content')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-8">
            <h2>{{ $movie->title }}</h2>
        </div>
        <div class="col-md-4">
            <div class="float-right">
                <div class="btn-group" role="group">
                    <a href="{{ route('movies.edit', $movie->id) }}"
                    class="btn btn-primary ml-3">Edit</a>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                        <button type="submit" class="btn btn-danger ml-3">Delete</button>
                        @method('DELETE')
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h5>
        <span class="badge badge-primary">
        <i class="fa fa-star fa-fw"></i>
        {{ $movie->rating }}
        </span>
    </h5>
    <p>
        <ul class="list-inline">
            <li class="list-inline-item">
            <i class="fa fa-th-large fa-fw"></i>
            <em>{{ $movie->genre }}</em>
            </li>
            <li class="list-inline-item">
            <i class="fa fa-calendar fa-fw"></i>
            {{ $movie->year }}
            </li>
        </ul>
    </p>
    <hr>
    <div class="text-center">
        <img src="{{ Storage::url($movie->image) }}"
        class="img-fluid rounded text-center">
    </div>
    <hr>
    <p class="lead">{{ $movie->description }}</p>
</div>
@endsection
