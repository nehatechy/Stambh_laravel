@extends('layout.app')
@section('title', 'Thank You | Stambha Consultants')
@section('meta_description', 'Your enquiry has been received. Our structural engineering team in Jaipur will respond within 24 hours.')
@section('meta_robots', 'noindex, nofollow')
@section('content')
<section style="margin-top:5rem">
    <div class="ym_container">
        <div class="row align-items-center" style="margin:100px 0 0;">
            <div class="col-lg-6">
                <img src="{{ asset('public/front/images/thank-you.png') }}" alt="thank-you" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h1>THANK YOU</h1>
                <p>
                    Your enquiry has been submitted successfully.<br>
                    You will get Quote Response Within 24 Hours
                </p>
                <a href="https://stambhaconsultants.com/contact" class="btn-tectonic-primary text-decoration-none">Home</a>
            </div>
        </div>
    </div>
</section>
@endsection