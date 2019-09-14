@extends('layouts.app')

@section('content')
    <div class="container-fluid no-gutters mainGradient bottomMargin">
        <div class="row">
            <div class="col">
                {{--<div class="flex-center">--}}
                {{--<img class="img-fluid" src="{{ secure_asset('svg/Epicteq-logo.svg') }}" alt="Epicteq">--}}
                {{--</div>--}}
                <div class="homeJumbo transparent-bg">
                    <h1
                    class="text-center text-white">Building quality software for the web to help businesses solve their problems and grow their companies.</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <i class="logoBlueColor iconPad fas fa-space-shuttle fa-rotate-270 fa-7x fa-w-20 card-img-top"></i>
                    <div class="card-body">
                        <h5 class="card-title">New Heights</h5>
                        <p
                        class="card-text">Let our software take your business to new heights while making your lives easier.</p>
                    </div>
                </div>
            </div>
            <div class="col text-center d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <i class="logoBlueColor iconPad fas fa-user-shield fa-7x fa-w-20 card-img-top"></i>
                    <div class="card-body">
                        <h5 class="card-title">Protection</h5>
                        <p
                        class="card-text">We offer protection from you building your own solutions through rushed timelines and production schedules.</p>
                    </div>
                </div>
            </div>
            <div class="col text-center d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <i class="logoBlueColor iconPad fas fa-clock fa-7x fa-w-20 card-img-top"></i>
                    <div class="card-body">
                        <h5 class="card-title">Time is money</h5>
                        <p
                        class="card-text">We help save you and your employees time so it can be spent on growing your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
