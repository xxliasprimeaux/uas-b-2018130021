@extends('layout.master')

@section('title', 'Add New Movie')

@section('content')
<h2>Add New Movie</h2>
<form action="{{route('movies.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"
            name="title" id="title" value="{{ old('title') }}">
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="genre">Genre</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror"
            name="genre" id="genre" value="{{ old('genre') }}">
            @error('genre')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="image-label">Image</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="image">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>
        @error('image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
</form>
@endsection

@push('js_after')
<script>
    // Untuk upload file
    $(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endpush
