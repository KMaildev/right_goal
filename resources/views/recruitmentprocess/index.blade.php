@extends('layouts.app')
@section('content')
    <div class="inner-banner" style="background-color:#0c35a3">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Our Recruitment Process</h3>
                <ul>
                    <li>
                        <a href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li>Our Recruitment Process</li>
                </ul>
            </div>
        </div>
        <div class="inner-lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <div class="timeline-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="timeline-right-content">
                                <div class="section-title-two">
                                    <span class="sp-title">Step By Step</span>
                                    <h2>Our Recruitment Process</h2>
                                    <p>You know that attracting and retaining top talent is vital for the success of your
                                        business. It’s that end result you’re focused on – hiring a great team – and not the
                                        process to get there. </p>
                                </div>
                                <div class="timeline-right-profile">
                                    <img src="{{ asset('assets/data/logo.jpg') }}" alt="Images"
                                        style="width:50px;height:50px;">
                                    <p>The employer will formally issue a demand letter in favor of Right Goal Agency
                                        mentioning all kinds of facilities including job categories and others benefits.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="timeline-right-content">
                                <div class="section-title-two">
                                    <span class="sp-title">Step By Step</span>
                                    <h2>Personal Interview</h2>


                                </div>
                                <div class="timeline-right-profile">
                                    <img src="{{ asset('assets/data/logo.jpg') }}" alt="Images"
                                        style="width:50px;height:50px;">
                                    <p>Personal Interviews are processed by our expert recruitment manager based on the job
                                        description that was provided by our client. The classified workers, the skilled,
                                        simi-skilled, unskilled categories are also subjected to a trade test as pore their
                                        specialization.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="timeline-right-content">
                                <div class="section-title-two">
                                    <span class="sp-title">Step By Step</span>
                                    <h2>Travel Agreement</h2>

                                </div>
                                <div class="timeline-right-profile">
                                    <img src="{{ asset('assets/data/logo.jpg') }}" alt="Images"
                                        style="width:50px;height:50px;">
                                    <p>In all case we sent all the visa endorsement, passport to the airline, to confirm the
                                        schedules flight from Myanmar to the nearest airport for the working site.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="timeline-vertical">
                        <ol>
                            <li>
                                <div class="content">
                                    <div class="timeline-icon"><i class="flaticon-research"></i></div>
                                    <div class="time-content">
                                        <h3>1. Received Demand From The Client.</h3>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="timeline-icon"><i class="flaticon-keywords"></i></div>
                                    <div class="time-content">
                                        <h3>2. Search Qualified Candidates </h3>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="timeline-icon"><i class="flaticon-content"></i></div>
                                    <div class="time-content">
                                        <h3>3. Personal Interview</h3>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="timeline-icon"> <i class="flaticon-prototype"></i></div>
                                    <div class="time-content">
                                        <h3>4. Medical Checkup</h3>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="timeline-icon"><i class="flaticon-web-programming"></i></div>
                                    <div class="time-content">
                                        <h3> 5. Passport Process</h3>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="timeline-icon"><i class="flaticon-complete"></i></div>
                                    <div class="time-content">
                                        <h3> 6. Final Interview</h3>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="timeline-icon"><i class="flaticon-complete"></i></div>
                                    <div class="time-content">
                                        <h3> 7. Visa Application</h3>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="timeline-icon"><i class="flaticon-complete"></i></div>
                                    <div class="time-content">
                                        <h3> 8. Immigration Process</h3>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="timeline-icon"><i class="flaticon-complete"></i></div>
                                    <div class="time-content">
                                        <h3> 9.Travels Aggrement</h3>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="timeline-icon"><i class="flaticon-complete"></i></div>
                                    <div class="time-content">
                                        <h3> 10. Depature From Myanmar</h3>

                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
