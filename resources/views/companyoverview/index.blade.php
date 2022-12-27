@extends('layouts.app')
@section('content')
    <div class="inner-banner" style="background-color:#0c35a3">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Our Company Overview</h3>
                <ul>
                    <li>
                        <a href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li>Our Company Overview</li>
                </ul>
            </div>
        </div>
        <div class="inner-lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <div class="terms-area pt-100 pb-70">
        <div class="container">
            <div class="section-title-two">
                <span class="sp-title">Overview</span>
                <h2>Our Company Overview</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-12">
                    <div class="single-content">

                        <h4> Our Company History</h4>
                        <p>
                            Our company name Right Goal Co.,Ltd, was established in 2022. We got licence from the Ministry
                            of labour (department of labour) in 2022.
                            Licence No.153/2022, we aim to support workers for Asia countries, especially Malaysia, Japan,
                            Singapore and Thailand with MOU system. We have an ambition to be one of the best recruitment
                            agency.
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="col-lg-12-md-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="case-studies-img-item">
                                    <a href="">
                                        <img src="{{ asset('assets/data/c1.jpg') }}" alt="Images"
                                            style="width:320px; height:450px;border-style: groove;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="case-studies-img-item">
                                    <a href="">
                                        <img src="{{ asset('assets/data/c2.jpg') }}" alt="Images"
                                            style="width:320px; height:450px; border-style: groove;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="case-studies-img-item">
                                    <a href="">
                                        <img src="{{ asset('assets/data/c3.jpg') }}" alt="Images"
                                            style="width:320px; height:450px; border-style: groove;">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection
