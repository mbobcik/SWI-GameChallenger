@extends('layout')

@section('content')
    {{--{{$username}}--}}
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <img src="{{ asset('img/logo.png') }}" class="img-responsive"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 add-challenge text-center">
                <h2>New Challenge</h2>
                <div class="row text-center">
                    <div class="dropdown">
                        <input type="button" id="select_staff" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" value="Choose game">
                        <span class="caret"></span>
                        <ul id="admin_cal_list" class="dropdown-menu">
                            <input type="hidden" id="admin_id" class="form-control">
                            <li id="1"><a href="#">Name 1</a></li>
                            <li id="2"><a href="#">Name 2</a></li>
                            <li id="3"><a href="#">Name 3</a></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <input type="button" id="select_staff" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" value="Choose room">
                        <span class="caret"></span>
                        <ul id="admin_cal_list" class="dropdown-menu">
                            <input type="hidden" id="admin_id" class="form-control">
                            <li id="1"><a href="#">Name 1</a></li>
                            <li id="2"><a href="#">Name 2</a></li>
                            <li id="3"><a href="#">Name 3</a></li>
                        </ul>
                    </div>
                 </div>
                <div class="row text-center">
                    <div class="dropdown">
                        <input type="button" id="select_staff" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" value="From">
                        <span class="caret"></span>
                        <ul id="admin_cal_list" class="dropdown-menu">
                            <input type="hidden" id="admin_id" class="form-control">
                            <li id="1"><a href="#">Name 1</a></li>
                            <li id="2"><a href="#">Name 2</a></li>
                            <li id="3"><a href="#">Name 3</a></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <input type="button" id="select_staff" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" value="To">
                        <span class="caret"></span>
                        <ul id="admin_cal_list" class="dropdown-menu">
                            <input type="hidden" id="admin_id" class="form-control">
                            <li id="1"><a href="#">Name 1</a></li>
                            <li id="2"><a href="#">Name 2</a></li>
                            <li id="3"><a href="#">Name 3</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <!-- Indicates a successful or positive action -->
                        <button type="button" class="btn btn-success" style="margin-top: 25px;">Create challenge</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
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