@extends('layouts.app')

@section('content')
<section class="clean-block clean-product dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Profile</h2>
        </div>
        <div class="block-content">
            <div class="product-info">
                <div>
                    <ul class="nav nav-tabs" role="tablist" id="myTab">
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-toggle="tab" id="description-tab" href="#description">Details</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" id="specifications-tabs" href="#events">Events</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" id="reviews-tab" href="#change_password">Change Password</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane active fade show description" role="tabpanel" id="description" style="margin: 0px;">
                          <table class="table table-borderless" >
                            <tbody>
                              <tr>
                                <th scope="row">Username</th>
                                <td>:</td>
                                <td>{{$user->username}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Name</th>
                                <td>:</td>
                                <td>{{$user->name}}</td>
                              </tr>
                              <tr>
                                <th scope="row">NRP</th>
                                <td>:</td>
                                <td>{{$user->profile->nrp}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Department</th>
                                <td>:</td>
                                <td>{{$user->profile->department}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Title</th>
                                <td>:</td>
                                <td>{{$user->profile->title}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Email</th>
                                <td>:</td>
                                <td>{{$user->email}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Phone Number</th>
                                <td>:</td>
                                <td>{{$user->profile->phone}}</td>
                              </tr>
                            </tbody>
                          </table>
                          @can('update', $user->profile)
                            <div class="container">
                                <a href="/profile/{{$user->id}}/edit" class="btn btn-warning text-white" style="display: inline-block;">Edit</a>
                            </div>
                          @endcan
                        </div>
                        <div class="tab-pane fade show specifications" role="tabpanel" id="events">
                            <h1>This is a placeholder event</h1>
                        </div>
                        <div class="tab-pane fade show" role="tabpanel" id="change_password">
                          <div class="container" style="margin-top: 60px;">

                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
