@extends('layouts.app')

@section('content')
<section class="clean-block clean-form dark">
    <div class="container">
        <div class="block-heading">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h2 class="text-info">{{ __('You are logged in!') }}</h2>
        </div>
    </div>
</section>
@endsection
