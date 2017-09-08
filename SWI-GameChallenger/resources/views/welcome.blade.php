@extends('layout')

@section('content')
    {{--<div class="container">--}}
        <div class="row">
            <div class="well invisible"></div>
            <div class="well invisible"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="well text-center">
                    <h2>Welcome,<br>
                        please login..</h2>
                    <p>
                        <a class="btn btn-lg btn-primary" href="/signin" role="button" id="connect-button">Login</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    {{--</div>--}}
@endsection