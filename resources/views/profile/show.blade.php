@extends('layouts.app')

@section('content')
<section class="clean-block about-us">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Profile Page</h2>
            <p>{{$user->username}} Profile</p>
        </div>
    </div>
</section>
@endsection
