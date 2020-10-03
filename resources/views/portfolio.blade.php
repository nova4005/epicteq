@extends('layouts.app')

@section('content')
    <div class="container-fluid no-gutters mainGradient bottomMargin">
        <div class="row">
            <div class="col">
                <div class="homeJumbo transparent-bg">
                    <h1
                    class="text-center text-white">Check out some of the work we have done!</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/200x150" alt="Placeholder">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <p
                        class="card-text">Description and information here.</p>
                    </div>
                </div>
            </div>
            <div class="col text-center d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/200x150" alt="Placeholder">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <p
                        class="card-text">Description and information here.</p>
                    </div>
                </div>
            </div>
            <div class="col text-center d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/200x150" alt="Placeholder">
                    <div class="card-body">
                        <h5 class="card-title">Project 3</h5>
                        <p
                        class="card-text">Description and information here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
