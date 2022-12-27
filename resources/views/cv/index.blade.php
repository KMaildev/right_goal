@extends('layouts.app')
@section('title', ' - Submit CV')
@section('content')
    <div class="inner-banner" style="background-color:#0c35a3">
        <div class="container">
            <div class="inner-title text-center">
                <h3>
                    Submit CV
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li>
                        Submit CV
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
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="section-title">
                            <h2>APPLY YOUR CV</h2>
                            <span class="sp-color1">
                                Fill your infomations and upload your CV.
                            </span>
                        </div>
                        <hr>
                        <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                            enctype="multipart/form-data" id="create-form">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label>Additional Note</label>
                                        <textarea class="form-control" rows="5" name="additional_note">{{ old('additional_note') }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="choose-img">
                                        <label for="img">Select your CV to upload</label>
                                        <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                            class="form-control" />
                                        @error('attachment_file')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="part-btn">
                                        <button type="submit" class="default-btn btn-bg1">
                                            Apply Now <i class='bx bx-right-arrow-alt'></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
