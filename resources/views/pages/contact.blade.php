@extends('layouts.app')

@section('content')
<section class="clean-block clean-form dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Contact Us</h2>
            <p>Feel free to reach out to us</p>
        </div>
        <form action="" class="pageclip-form" method="post">
            <div class="form-group"><label>Name</label><input class="form-control" type="text" name="full_name"></div>
            <div class="form-group"><label>Subject</label><input class="form-control" type="text" name="subject"></div>
            <div class="form-group"><label>Email</label><input class="form-control" type="email" name="email"></div>
            <div class="form-group"><label>Message</label><textarea class="form-control" name="message"></textarea></div>
            <div class="form-group"><button class="btn btn-primary btn-block pageclip-form__submit" type="submit">Send</button></div>
        </form>
    </div>
</section>
@endsection
