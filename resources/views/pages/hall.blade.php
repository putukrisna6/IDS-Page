@extends('layouts.app')

@section('content')
<section class="clean-block clean-services dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">IDS Hall of Fame</h2>
            <p>See what teams from ITS Debating Society has achieved from the past years</p>
        </div>
        <div class="row">
            @foreach (App\Models\Honor::all() as $honor)
                <div class="col-md-6 col-lg-4">
                    <div class="card"><img class="card-img-top w-100 d-block" src="/storage/{{$honor->image}}">
                        <div class="card-body">
                            <h4 class="card-title">{{$honor->title}}<br></h4>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
