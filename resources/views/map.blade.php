@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

<<<<<<< HEAD
                    @if (Route::has('login'))
                        <div class="pull-right">
                            @auth
                                <a href="{{ url('/home') }}">Home</a> ||
                                <a href="{{ url('/food-admin') }}">Admin</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                             @endauth
                        </div>
                    @endif
=======
                    Location Map based on My Users
>>>>>>> 15ab652310313fa9d63488ac80b049988e635fc2

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    You are logged in!
=======
                        <iframe src="https://www.google.com/maps/d/embed?mid=149iNJ4srL__vJx9IS7sxHgQDK_9Fhci6" width="100%" height="700"></iframe>
>>>>>>> 15ab652310313fa9d63488ac80b049988e635fc2

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
