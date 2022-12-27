@extends('layouts.app')
@section('content')
    <div class="choose-area pb-70 py-5">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color1">Activities</span>
                <h2>Our Company Activities</h2>
            </div>

            <div class="row pt-45">
                @foreach ($activities as $activitie)
                    @php
                        $values = explode(',', $activitie->photo);
                    @endphp
                    @foreach ($values as $photo)
                        <div class="col-lg-3 col-md-6">
                            <div class="choose-card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 10px;">
                                <img src="{{ $photo }}" alt="Images"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                <h3>
                                    {{ $activitie->title ?? '' }}
                                </h3>
                                <p>
                                    {!! $activitie->description ?? '' !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
