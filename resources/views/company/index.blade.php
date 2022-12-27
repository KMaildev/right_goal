@extends('layouts.app')
@section('content')
    <div class="inner-banner" style="background-color:#0c35a3">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Our Company</h3>
                <ul>
                    <li>
                        <a href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li>Our Company</li>
                </ul>
            </div>
        </div>
        <div class="inner-lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <div class="what-did-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="what-did-content">
                        <div class="section-title-two">
                            <span class="sp-title">What we did</span>
                            <h2>Our Company </h2>
                            <p>
                                Our Company named Right Goal Co.,Ltd was established in 2022. We got licence from The
                                Ministry of labour (depeartment of labour) in 2022.

                            </p>
                            <p>License No.153/2022, we aim to support workers for Asia countries, especially Malaysia,
                                Japan, Singapore and Thailand with MOU system. We have an ambition to be one of the best
                                recruitment agency.</p>
                        </div>
                        <ul>
                            <li><i class='bx bx-check'></i> Innovation</li>
                            <li><i class='bx bx-check'></i> Efficiency</li>
                            <li><i class='bx bx-check'></i>Organization and Culture</li>
                            <li><i class='bx bx-check'></i> Revenue</li>
                        </ul>
                        <div class="what-did-profile">
                            <img src="{{ asset('assets/data/logo.jpg') }}" alt="Images" style="width:50px;height:50px;">
                            <p>We are demonstrating our commitment to innovate continuously new job market and
                                opportunities so that we can expand our curriculum and create job opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="what-did-right-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="what-did-right">
                                    <div class="content">
                                        <img src="assets/images/what-did/text16.png" alt="Images">
                                        <h3>Years Of Experience</h3>
                                    </div>
                                    <div class="what-did-right-img">
                                        <img src="{{ asset('assets/data/about2.webp') }}" alt="Images">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="what-did-right">
                                    <div class="what-did-right-img what-did-right-img-bg">
                                        <img src="{{ asset('assets/data/about6.jpg') }}" alt="Images">
                                        {{-- <a href="https://www.youtube.com/watch?v=Zd00oIDAt60" class="play-btn play-on">
                                            <i class='bx bx-play'></i>
                                        </a> --}}
                                    </div>
                                    <div class="content">
                                        <img src="assets/images/what-did/text11.png" alt="Images">
                                        <h3>Years Of Experience</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services-area pb-70">
        <div class="container">
            <div class="section-title-two">
                <span class="sp-title">Our Services</span>
                <h2>Featured Services</h2>

            </div>
            <div class="services-slider owl-carousel owl-theme pt-45">
                <div class="services-item">
                    <i class="flaticon-education"></i>
                    <h3><a href="">Search the country
                        </a></h3>

                </div>
                <div class="services-item">
                    <i class="flaticon-research-1"></i>
                    <h3><a href="">Find The Right Job
                        </a></h3>

                </div>
                <div class="services-item">
                    <i class="flaticon-rocket"></i>
                    <h3><a href="">Submit Resume
                        </a></h3>

                </div>
                <div class="services-item">
                    <i class="flaticon-branding"></i>
                    <h3><a href="">Apply Jobs
                        </a></h3>

                </div>

            </div>
        </div>
    </div>
@endsection
