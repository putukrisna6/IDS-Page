@extends('layouts.app')

@section('content')
<section class="clean-block about-us">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Our Staffs</h2>
            <p>See who made IDS runs</p>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-sm-6 col-lg-4" id="real">
                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="/image/avatars/jarjit.jpeg">
                    <div class="card-body info">
                        <h4 class="card-title"><strong>Indrajit Aryo Wicaksono</strong><br></h4>
                        <p class="card-text">Vice President</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="/image/avatars/oma.jpeg">
                    <div class="card-body info">
                        <h4 class="card-title"><strong>Omahira Al Kahfi Satrio Samudro</strong><br></h4>
                        <p class="card-text">President</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4" id="alt">
                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="/image/avatars/jarjit.jpeg">
                    <div class="card-body info">
                        <h4 class="card-title"><strong>Indrajit Aryo Wicaksono</strong><br></h4>
                        <p class="card-text">Vice President</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="/image/avatars/firza.jpeg">
                    <div class="card-body info">
                        <h4 class="card-title"><strong>Elfirza Zain</strong><br></h4>
                        <p class="card-text">Secretary</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="/image/avatars/ichlas.jpeg">
                    <div class="card-body info">
                        <h4 class="card-title">Muh Ichlasul Amal</h4>
                        <p class="card-text">Head of Human Resources and Training</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="/image/avatars/face.jpeg">
                    <div class="card-body info">
                        <h4 class="card-title"><strong>Putu</strong>&nbsp;Krisna Andyartha<br></h4>
                        <p class="card-text">Head of Information and Technology</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
