@extends('Layout')
@section('title', 'Services')
@section('content')
<section class="hero-section-six bg-lighter z-1 rel pt-80 rpt-65">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="hero-content-six mr-10 rmr-0 py-100 rpy-80">
                    <span class="sub-title d-block wow fadeInUp delay-0-2s">Services</span>
                    <h1 class="wow fadeInUp delay-0-4s mt-20">Well Organized for Well Satisfied</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hero-six-images wow fadeInRight delay-0-8s">
                    <img src="{{ asset('assets/images/all/cloud-services.png') }}" alt="Hero" style="height: 400px;width: auto;margin-left: 150px;">
                </div>
            </div>
        </div>
    </div>
    <div class="hero-shapes">
        <img src="{{ asset('assets/images/shapes/lines.png') }}" alt="Shape">
        <img src="{{ asset('assets/images/shapes/w-shape.png') }}" alt="Shape">
        <img src="{{ asset('assets/images/shapes/close.png') }}" alt="Shape">
        <img src="{{ asset('assets/images/shapes/triangle.png') }}" alt="Shape">
        <img src="{{ asset('assets/images/shapes/circle.png') }}" alt="Shape">
    </div>
</section>
<section class="what-we-do-two text-center pt-115 rpt-95 pb-90 rpb-70">
    <div class="container">
        <div class="section-title mb-55">
            <span class="sub-title">What We Do</span>
            <h2>Highlights that Help you <br>construct better</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="feature-item-two color-two wow fadeInUp delay-0-4s">
                    <div class="icon">
                        <img src="{{ asset('assets/images/services/icloud.png') }}" style="height: 50px">
                    </div>
                    <div class="feature-line">
                        <span class="animate-bar delay-1-0s"></span>
                    </div>
                    <h4><a href="#">iCloud Storage</a></h4>
                    <p>The best place for all your photos, files, and more.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="feature-item-two color-two wow fadeInUp delay-0-4s">
                    <div class="icon">
                        <img src="{{ asset('assets/images/services/hosting.png') }}" style="height: 50px">
                    </div>
                    <div class="feature-line">
                        <span class="animate-bar delay-1-0s"></span>
                    </div>
                    <h4><a href="#">Web Hosting</a></h4>
                    <p>Facilities required to create and maintain a site</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="feature-item-two color-two wow fadeInUp delay-0-4s">
                    <div class="icon">
                        <img src="{{ asset('assets/images/services/amazon-aws.png') }}" style="height: 50px">
                    </div>
                    <div class="feature-line">
                        <span class="animate-bar delay-1-0s"></span>
                    </div>
                    <h4><a href="#">AWS</a></h4>
                    <p>AWS is an on-demand cloud computing platforms</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="feature-item-two color-two wow fadeInUp delay-0-4s">
                    <div class="icon">
                        <img src="{{ asset('assets/images/services/azure.png') }}" style="height: 50px">
                    </div>
                    <div class="feature-line">
                        <span class="animate-bar delay-1-0s"></span>
                    </div>
                    <h4><a href="#">Azure</a></h4>
                    <p>A cloud computing platform operated by Microsoft</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection