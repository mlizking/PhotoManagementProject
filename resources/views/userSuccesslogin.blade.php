@extends('layouts.masterIndex')
@section('content')
    <div class="container box">
        <h3 align="center">Hello</h3><br>
        @if (isset(Auth::user()->email))
            <div class="alert alert-danger success-block">
                <strong>{{ Auth::user()->email }}</strong><br>
                <a href="{{ url('/login/logout') }}">Sign Out</a>    
            </div>
        @else
            <script>window.location="/login";</script>
        @endif
    </div>
@endsection