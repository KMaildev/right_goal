@extends('layouts.app')
@section('content')
    <div class="inner-banner" style="background-color:#0c35a3">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Vision, Mission & Values</h3>
                <ul>
                    <li>
                        <a href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li>Vision, Mission & Values</li>
                </ul>
            </div>
        </div>
        <div class="inner-lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <div class="faq-area pb-70">
        <div class="container">
            <div class="section-title two">
                <span class="sp-title">Company Statement</span>
                <h2>Vision, Mission & Values</h2>
            </div>
            <div class="row pt-45 align-items-center">
                <div class="col-lg-6">

                    <div class="faq-img">
                        <ul>
                            <li><img src="{{ asset('assets/data/v8.gif') }}" alt="Images"></li>
                            <li class="line-img">
                                <img src="{{ asset('assets/data/v7.gif') }}" alt="Images">
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Our Vision
                                </a>
                                <div class="accordion-content show">
                                    <p>
                                        To be the leading partners that clients and candidates always choose to connect
                                        with.
                                    </p>
                                </div>
                            </li>

                    </div>




                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
