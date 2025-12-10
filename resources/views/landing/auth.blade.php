@extends('layouts.landing')
@section('title', 'Login or Register')
@section('content')
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">login or register</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-register-area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ms-auto me-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4> login </h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">

                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        @session('success')
                                            <div class="alert alert-success" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endsession
                                        @session('error')
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('error') }}
                                            </div>
                                        @endsession
                                        <form action="/login" method="post">
                                            @csrf
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            <input type="email" name="email" placeholder="Email">
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            <input type="password" name="password" placeholder="Password">
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" name="remember">
                                                    <label>Remember me</label>
                                                    {{-- <a href="#">Forgot Password?</a> --}}
                                                </div>
                                                <button type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="/register" method="post">
                                            @csrf
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            <input type="text" name="name" placeholder="Name">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            <input type="email" name="email" placeholder="Email">
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            <input type="password" name="password" placeholder="Password">
                                            <div class="button-box">
                                                <button type="submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection