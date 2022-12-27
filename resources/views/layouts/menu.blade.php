<header class="top-header top-header" style="background-image: linear-gradient(to right,#126acf,#0b286d);">
    <div class="container-fluid">
        <div class="container-max">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-left">
                        <div class="header-left-card">
                            <ul>
                                <li>
                                    <div class="head-icon">
                                        <i class='flaticon-placeholder'></i>
                                    </div>
                                    <a href="{{ route('contact.index') }}">
                                        No.166/168,1<sup>st</sup> Floor (Left), 49<sup>th</sup>Street,
                                        Pazundaung Tsp,
                                    </a>
                                </li>
                                <li>
                                    <div class="head-icon">
                                        <i class='flaticon-email'></i>
                                    </div>
                                    <a href="mailto:info@rightgoalcompany.com">
                                        info@rightgoalcompany.com
                                    </a>
                                </li>
                                <li>
                                    <div class="head-icon">
                                        <i class='flaticon-call'></i>
                                    </div>
                                    <a href="tel:+959 4210 89 613">
                                        +959 4210 89 613
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="top-right">
                        <div class="language-list">
                            <select class="language-list-item">
                                <option>English</option>
                                <option>Japan</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="navbar-area">

    <div class="mobile-nav">
        <a href="{{ route('welcome') }}" class="logo">
            <img src="{{ asset('assets/data/logo.jpg') }}" alt="Logo" style="width:53px;height:53px;">
        </a>
    </div>

    <div class="main-nav nav-two">
        <div class="container-fluid" style="background-color: #EFF0F2;">
            <div class="container-max">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand" href="{{ route('welcome') }}">
                        <img src="{{ asset('data/logo.png') }}" alt="Logo" style="width: 100%; height: 70px;">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{ route('welcome') }}" class="">
                                    <b> Home</b>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <b> About </b>
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item">
                                        <a href="{{ route('company.index') }}" class="nav-link">
                                            Our Company
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('companyoverview.index') }}" class="nav-link">
                                            Company Overview
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('directormessage.index') }}" class="nav-link">
                                            Directors' Message
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('visionmission.index') }}" class="nav-link">
                                            Vision, Mission & Values
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('team.index') }}" class="nav-link">
                                            Our Teams
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('org') }}" class="nav-link">
                                            Our Organization Chart
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('recruitmentprocess.index') }}" class="nav-link">
                                    <b>Recruitment Process</b>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <b> Our Agreement Countries</b>
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach ($countryies as $country)
                                        <li>
                                            <a class="nav-item" href="{{ route('overseas_jobs.show', $country->id) }}">
                                                {{ $country->title ?? '' }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <b>Apply Form</b>
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('cv.index') }}" class="nav-link">
                                            Submit CV
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('employer.index') }}" class="nav-link">
                                            Employer Form
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="{{ route('activitie.index') }}" class="nav-link">
                                    <b>Our Activities</b>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact.index') }}" class="nav-link">
                                    <b>Contact</b>
                                </a>
                            </li>
                        </ul>

                        <div class="nav-side-bar">
                            <div class="language-side-list">
                                <select class="language-list-item">
                                    <option>English</option>
                                    <option>Japan</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
