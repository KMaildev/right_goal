@extends('layouts.app')
@section('content')
    <div class="inner-banner" style="background-color:#0c35a3">
        <div class="container">
            <div class="inner-title text-center">
                <h3>
                    Contact Us
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li>
                        Contact Us
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
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="section-title">
                            <span class="sp-color1">Contact Us</span>
                            <h2>Get In Touch Now</h2>
                        </div>
                        <form autocomplete="off" action="{{ route('contact.store') }}" method="POST" id="create-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" type="text" value="{{ old('name') }}"
                                            placeholder="Your Name*" name="name">
                                        @error('name')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Phone</label>
                                        <input class="form-control" type="text" value="{{ old('phone') }}"
                                            placeholder="Your Phone*" name="phone">
                                        @error('phone')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input class="form-control" name="email" type="text"
                                            value="{{ old('email') }}" placeholder="Email Address">
                                        @error('email')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Subject</label>
                                        <input class="form-control" name="subject" type="text"
                                            value="{{ old('subject') }}" placeholder="Subject*">
                                        @error('subject')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Your message</label>
                                <textarea class="form-control" cols="2" rows="2" placeholder="Your message" name="message">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="default-btn btn-bg1">
                                    Send Message <i class='bx bx-right-arrow-alt'></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d412505.2712427161!2d-115.45519761572707!3d36.12522845546416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80beb782a4f57dd1%3A0x3accd5e6d5b379a3!2sLas%20Vegas%2C%20NV%2C%20USA!5e0!3m2!1sen!2sbd!4v1610995803824!5m2!1sen!2sbd"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
