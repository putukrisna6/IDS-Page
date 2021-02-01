@extends('layouts.app')

@section('content')
<section class="clean-block clean-form dark">


    <div class="container">
      <div class="block-heading">
          <h2 class="text-info">Edit Profile Info</h2>
      </div>

      <form method="post" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nrp" class="">NRP</label>
            <input id="nrp"
                    type="text"
                    class="form-control @error('nrp') is-invalid @enderror"
                    name="nrp"
                    value="{{ old('nrp') ?? $user->profile->nrp}}"
                    autocomplete="nrp" autofocus>
            @error('nrp')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            <label for="department" class="">Department</label>
            <input id="department"
                    type="text"
                    class="form-control @error('department') is-invalid @enderror"
                    name="department"
                    value="{{ old('department') ?? $user->profile->department}}"
                    autocomplete="department" autofocus>
            @error('department')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            <label for="title" class="">Title</label>
            <input id="title"
                    type="text"
                    class="form-control @error('title') is-invalid @enderror"
                    name="title"
                    value="{{ old('title') ?? $user->profile->title}}"
                    autocomplete="title" autofocus>
            @error('title')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone" class="">Phone Number</label>
            <input id="phone"
                    type="text"
                    class="form-control @error('phone') is-invalid @enderror"
                    name="phone"
                    value="{{ old('phone') ?? $user->profile->phone}}"
                    autocomplete="phone" autofocus>
            @error('phone')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <button class="btn btn-primary">Save</button>

      </form>
    </div>
  </section>
@endsection
