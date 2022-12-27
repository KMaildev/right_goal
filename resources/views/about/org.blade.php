@extends('layouts.app')
@section('content')
    <div class="inner-banner" style="background-color:#0c35a3">
        <div class="container">
            <div class="inner-title text-center">
                <h3>
                    Our Organization Chart
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li>
                        Our Organization Chart
                    </li>
                </ul>
            </div>
        </div>
        <div class="inner-lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <center>
                        <img src="{{ asset('data/org.png') }}" alt="" style="width: 40%;">
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
