@extends('layouts.app')

@section('content')
<section class="clean-block clean-blog-list dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Debating Resources</h2>
            <p>Articles to help you to develop as a better debater</p>
        </div>
        <div class="block-content">
            <div class="clean-blog-post">
                <div class="row">
                    <div class="col-lg-4"><img class="rounded img-fluid" src="/image/blog-photos/blogImg.png"></div>
                    <div class="col-lg-8">
                        <h3>Videos on Motion Analysis</h3>
                        <div class="info"><span class="text-muted">19th of December, 2020 by&nbsp;<a href="#">Elfirza Zain</a></span></div>
                        <p>A curated list of helpful videos that meticulously dissect various motions.</p>
                        <button class="btn btn-outline-primary btn-sm" type="button"><a class="button-in-page" style="padding: 2px"href="{{ url('blogs/19-12-20') }}">Read More</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
