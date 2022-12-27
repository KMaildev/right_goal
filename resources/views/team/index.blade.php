@extends('layouts.app')
@section('content')
    <div class="inner-banner" style="background-color:#0c35a3">
        <div class="container">
            <div class="inner-title text-center">
                <h3>
                    Our Teams
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li>
                        Our Teams
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


    <div class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color1">Our Team</span>
                <h2>We Have a Dedicated Team Member</h2>
            </div>
            <div class="row pt-45">

                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ $team->photo }}" alt="Images">
                                <div class="team-social-icon">
                                    <ul class="team-social-link">
                                        <li>
                                            <a href="https://www.facebook.com/rihgtgoal/?ref=page_internal" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/" target="_blank">
                                                <i class='bx bxl-linkedin'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/" target="_blank">
                                                <i class='bx bxl-twitter'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h3>{{ $team->name ?? '' }}</h3>
                                <span>{{ $team->position ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
