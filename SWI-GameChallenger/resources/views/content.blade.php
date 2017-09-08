@extends('layout')

@section('content')
    {{--{{$username}}--}}
    <div class="container">
{{--        <a href="{{action('OutlookController@signOut')}}">Link name/Embedded Button</a>--}}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6"></div>
            <div class="col-md-2">
                <a href="{{url('signout')}} " class="btn btn-default" style="margin-top: 20px;">sign out</a>
            </div>
        </div>

        <form method="post" action="{{ action('OutlookController@createChallenge') }}">
            {!! csrf_field() !!}

            <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 add-challenge text-center">
                <h2>New Challenge</h2>
                <div class="row text-center">
                    <div class="dropdown">
                        <input type="button" id="select_staff" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" value="Choose game" name="game" id="game">
                        <span class="caret"></span>
                        <ul id="admin_cal_list" class="dropdown-menu">
                            <input type="hidden" id="admin_id" class="form-control">
                            <li id="1"><a href="#">Table tennis</a></li>
                            <li id="2"><a href="#">Biliard</a></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <input type="button" id="select_staff" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" value="Choose room">
                        <span class="caret"></span>
                        <ul id="admin_cal_list" class="dropdown-menu">
                            <input type="hidden" id="admin_id" class="form-control">
                            <li id="1"><a href="#">Gaming room 6a</a></li>
                            <li id="2"><a href="#">Gaming rooom 5a</a></li>
                        </ul>
                    </div>
                 </div>
                <div class="row text-center">
                    <div class="dropdown">
                        <input type="button" id="select_staff" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" value="From">
                        <span class="caret"></span>
                        <ul id="admin_cal_list" class="dropdown-menu">
                            <input type="hidden" id="admin_id" class="form-control">
                            <li id="1"><a href="#">10:00</a></li>
                            <li id="2"><a href="#">11:00</a></li>
                            <li id="3"><a href="#">12:00</a></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <input type="button" id="select_staff" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" value="To">
                        <span class="caret"></span>
                        <ul id="admin_cal_list" class="dropdown-menu">
                            <input type="hidden" id="admin_id" class="form-control">
                            <li id="1"><a href="#">13:00</a></li>
                            <li id="2"><a href="#">14:00</a></li>
                            <li id="3"><a href="#">15:00</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <!-- Indicates a successful or positive action -->
                        <input type="submit" class="btn btn-success" style="margin-top: 25px;" value="create challenge">
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-md-4">
                <div class="well text-center">
                    <h2>Table tennis</h2>
                    <p>Marian Mrva</p>
                    <p>Gaming room 6a</p>
                    <p>15:00 - 20:00</p>
                    <button type="button" class="btn btn-success" style="margin-top: 25px;">Accept</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well text-center">
                    <h2>Table tennis</h2>
                    <p>Marian Mrva</p>
                    <p>Gaming room 6a</p>
                    <p>15:00 - 20:00</p>
                    <button type="button" class="btn btn-success" style="margin-top: 25px;">Accept</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well text-center">
                    <h2>Table tennis</h2>
                    <p>Marian Mrva <span style="margin: 0 20px;"> VS </span> Martin Bobcik</p>
                    <p>Gaming room 6a</p>
                    <p>15:00 - 20:00</p>
                    <button type="button" class="btn btn-danger" style="margin-top: 25px;">Decline</button>
                </div>
            </div>
        </div>
        <div class="well invisible"></div>
    </div>
@endsection