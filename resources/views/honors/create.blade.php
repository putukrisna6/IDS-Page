@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/h" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Honor</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">title</label>
                    <input id="title"
                            type="text"
                            class="form-control @error('title') is-invalid @enderror"
                            name="title"
                            value="{{ old('title') }}"
                            autocomplete="title" autofocus>
                    @error('title')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
