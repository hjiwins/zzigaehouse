@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
    @endif

        <div class="content">
            <img src="/img/zzigae.png" alt="zzigae house" class="main-image" />
            <div class="title m-b-md">
                Zzigae House
            </div>
            @if (session('msg'))
                <p>{{ session('msg') }}</p>
            @else
                <p>The best korean zzigaes</p>
            @endif
            <a href="{{ route('zzigaes.create') }}" class="order-btn">Order a zzigae</a>
        </div>
    </div>
@endsection