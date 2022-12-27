@extends('layouts.app')
@section('content')
    <div class="brand-area brand-bg3 pb-100">
        <div class="container">
            <div class="brand-slider-two owl-carousel owl-theme">
                <div class="brand-item">
                    <img src="{{ asset('assets/data/j1.png') }}" alt="Images" style="width:80px;height:80px;">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('assets/data/j2.png') }}" alt="Images" style="width:80px;height:80px;">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('assets/data/j3.png') }}" alt="Images" style="width:80px;height:80px;">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('assets/data/j5.png') }}" alt="Images" style="width:80px;height:80px;">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('assets/data/j4.png') }}" alt="Images" style="width:80px;height:80px;">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('assets/data/j6.png') }}" alt="Images" style="width:80px;height:80px;">
                </div>

            </div>
        </div>
    </div>

    <div class="what-did-area pt-70 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="what-did-left">
                        <img src="{{ asset('assets/data/about1.jpg') }}" alt="Images">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-md-4">
                                <div class="what-did-left-list list-pl-before">
                                    <h3>16</h3>
                                    <span>Years Of Experience</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-md-4">
                                <div class="what-did-left-list list-pl-before list-pl">
                                    <h3>112</h3>
                                    <span>Sending Worker</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-md-4 offset-lg-0 offset-md-0 offset-sm-3">
                                <div class="what-did-left-list">
                                    <h3>4</h3>
                                    <span>Sending Countries</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="what-did-content what-did-content-rs">
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
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="what-did-content-card">
                                    <h3><i class='bx bx-check'></i> Innovation</h3>
                                    <p>We are demonstrating our commitment to innovate continuously new job market and
                                        opportunities so that we can expand our curriculum and create job opportunities.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="what-did-content-card">
                                    <h3><i class='bx bx-check'></i>Efficiency</h3>
                                    <p>Efficiency means effective use of resources throughout all operation and achieving
                                        excellence in a faster way.

                                    </p>
                                    <br><br>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="what-did-content-card">
                                    <h3><i class='bx bx-check'></i>Organization and Culture

                                    </h3>
                                    <p>Our organization looks for those peoples who are highly qualified and want to work
                                        for long time.

                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="what-did-content-card">
                                    <h3><i class='bx bx-check'></i>Revenue</h3>
                                    <p>Generating more revenue requires us to develop sustainable relation with clients.
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="timeline-area">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title-two">
                    <span class="sp-title">Step By Step</span>
                    <h2>Our Recruitment Process</h2>
                </div>
            </div>
            <div class="timeline">
                <ol>
                    <li>
                        <div class="timeline-content">
                            <div class="time-line-top">Received Demand From The Client.</div>
                            <div class="time-bottom-icon">
                                <i class="flaticon-research"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <div class="time-top-icon">
                                <i class="flaticon-keywords"></i>
                            </div>
                            <div class="time-line-bottom">Search Qualified Candidates </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <div class="time-line-top">Personal Interview</div>
                            <div class="time-bottom-icon">
                                <i class="flaticon-content"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <div class="time-top-icon">
                                <i class="flaticon-prototype"></i>
                            </div>
                            <div class="time-line-bottom">Medical Checkup</div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <div class="time-line-top">Passport Process</div>
                            <div class="time-bottom-icon">
                                <i class="flaticon-web-programming"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <div class="time-top-icon">
                                <i class="flaticon-complete"></i>
                            </div>
                            <div class="time-line-bottom">Final Interview</div>
                        </div>
                    </li>
                </ol>
            </div>

        </div>
    </div>

    <div class="case-studies-area pb-70 py-3" style="background-color:#f9f9fe;">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-3">
                    <div class="section-title-two">
                        <span class="sp-title">Our Services</span>
                        <h2>Our Services</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-studies-text">
                        <p>Right Goal is offering all types of Manpower recruitment services in different countries and
                            bringing opportunities for Myanmar.</p>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="case-studies-btn">
                        <a href="{{ route('contact.index') }}" class="projects-btn">
                            Contact Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="row pt-45">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-sm-5">
                            <div class="case-studies-img-item">
                                <a href="">
                                    <img src="{{ asset('assets/data/about1.jpg') }}" alt="Images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-5">
                            <div class="case-studies-img-item">
                                <a href="">
                                    <img src="{{ asset('assets/data/about3.webp') }}" alt="Images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-5">
                            <div class="case-studies-img-item">
                                <a href="">
                                    <img src="{{ asset('assets/data/about4.webp') }}" alt="Images">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-5">
                            <div class="case-studies-img-item">
                                <a href="">
                                    <img src="{{ asset('assets/data/about5.jpg') }}" alt="Images">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-sm-6">
                            <div class="case-studies-list">
                                <i class="flaticon-branding"></i>
                                {{-- <img src="{{ asset('assets/data/s.png') }}" alt="Images" style="width:50px;height:50px;"> --}}
                                <h3><a href="">Malaysia</a></h3>
                                <p>We opened our recruitment firm to be closest to the clients.</p>

                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="case-studies-list">
                                <i class="flaticon-research-1"></i>
                                <h3><a href="">Thailand</a></h3>
                                <p>We opened our recruitment firm to be closest to the clients.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="case-studies-list">
                                <i class="flaticon-branding"></i>
                                <h3><a href="">Japan</a></h3>
                                <p>We opened our recruitment firm to be closest to the clients.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="case-studies-list">
                                <i class="flaticon-research-1"></i>
                                <h3><a href="">Singapore</a></h3>
                                <p>We opened our recruitment firm to be closest to the clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="choose-area pb-70 py-5">
        <div class="container">
            <div class="section-title-two text-center">
                <span class="sp-title">Our Activities</span>
                <h2>Our Activities</h2>
                <p>Our Recruitment Activities
                <p>
            </div>

            <div class="row pt-45">
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card">
                        <img src="{{ asset('assets/data/1.jpg') }}" alt="Images">
                        <h3>Our Activities</h3>
                        <p>October 1, 2022</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card">
                        <img src="{{ asset('assets/data/2.jpg') }}" alt="Images">
                        <h3>Our Activities</h3>
                        <p>October 1, 2022</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card">
                        <img src="{{ asset('assets/data/5.jpg') }}" alt="Images">
                        <h3>Our Activities</h3>
                        <p>October 1, 2022</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card">
                        <img src="{{ asset('assets/data/4.jpg') }}" alt="Images">
                        <h3>Our Activities</h3>
                        <p>October 1, 2022</p>
                    </div>
                </div>
            </div>
            <a href="{{ route('activitie.index') }}" class="default-btn-two">
                View More Activities <i class='bx bx-right-arrow-alt'></i></a>
        </div>
    </div>
@endsection
