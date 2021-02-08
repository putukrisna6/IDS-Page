@extends('layouts.app')

@section('content')
<section class="clean-block clean-hero welcome-page">
    <div class="text">
        <h3>Welcome to the official page of</h3>
        <h1 class="display-3">ITS Debating Society</h1><button class="btn btn-outline-light btn-lg" type="button" style="padding: 0px;"><a class="button-nav" href="#info">Learn More</a></button></div>
</section>
<section id="info" class="clean-block clean-info dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Overview</h2>
            <p>IDS is a debating community formed by college students from Sepuluh Nopember Institute of Technology to facilitate passions in parliamentary debating.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6"><img class="img-thumbnail" src="/image/scenery/ejved.jpg"></div>
            <div class="col-md-6">
                <h3>IDS Members</h3>
                <div class="getting-started-info">
                    <p>IDS aims to be an inclusive community that accepts ITS students from different backgrounds</p>
                </div><button class="btn btn-outline-primary btn-lg" type="button" style="padding: 0px;"><a class="button-in-page" href="{{ url('pages/staffs') }}">Meet The Staffs</a></button></div>
        </div>
    </div>
</section>
<section class="clean-block about-us">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Leave Us a Message</h2>
            <p style="margin-bottom: 15px;">Contact us if you have any questions or just interested to connect with us.</p>
            <button class="btn btn-outline-primary btn-lg" type="button" style="padding: 0px;">
                <a class="button-in-page" href="{{ url('pages/contact') }}">Contact Us</a>
            </button>
        </div>
    </div>
</section>
@endsection
