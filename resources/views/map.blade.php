@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

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

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
