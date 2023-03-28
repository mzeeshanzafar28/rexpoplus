@extends('Layout')
@section('title', 'About Us')
@section('content')
<section class="hero-section-six bg-lighter z-1 rel pt-80 rpt-65">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="hero-content-six mr-10 rmr-0 py-100 rpy-80">
                    <span class="sub-title d-block wow fadeInUp delay-0-2s">About Us</span>
                    <h1 class="wow fadeInUp delay-0-4s mt-20">Invest today, secure your tomorrow</h1>
                    <p class="wow fadeInUp delay-0-6s">Experience the power of the investment with rexpoplus</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hero-six-images wow fadeInRight delay-0-8s">
                    <img src="{{ asset('assets/images/all/contact-us.png') }}" alt="Hero" style="height: 400px;width: auto;margin-left: 150px;">
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
<section class="about-section pt-120 rpt-100" style="background-color: #64136A">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image-shape rmb-70 wow fadeInLeft delay-0-2s">
                    <img src="{{ asset('assets/images/about/about.png') }}" alt="About">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content text-white pr-70 rpr-0 wow fadeInRight delay-0-2s">
                    <div class="section-title mb-35">
                        <h2>Efficiently scalable, easily manageable, undeniably powerful</h2>
                    </div>
                    <p>In order to build your wealth, you will want to invest your money. Investing allows you to put your money in vehicles that have the potential to earn strong rates of return.</p>
                    <ul class="list-style-one mt-15">
                        <li>Grow Your Money</li>
                        <li>Save for Retirement</li>
                        <li>Earn Higher Returns</li>
                        <li>Reach Financial Goals</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="fact-counter-inner br-5 px-25 pt-80 pb-30 text-white text-center" style="background-color: #871A8F;">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="success-item wow fadeInUp delay-0-2s">
                        <span class="count-text plus" data-speed="5000" data-stop="520">0</span>
                        <p>Projects Done</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="success-item wow fadeInUp delay-0-6s">
                        <span class="count-text plus" data-speed="5000" data-stop="12">0</span>
                        <p>Years Experience</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="success-item wow fadeInUp delay-0-8s">
                        <span class="count-text plus" data-speed="5000" data-stop="1352">0</span>
                        <p>Happy Customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-section-six pb-120 rpb-100" style="margin-top: 200px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-six-content mr-65 rmr-0 wow fadeInLeft delay-0-2s">
                    <div class="section-title mb-35">
                        <span class="sub-title">WHY US</span>
                        <h2>Be part of a new venture</h2>
                    </div>
                    <div class="service-item-six">
                        <div class="service-content">
                            <p>We take your investments and Invest in world's top digital services including iCloud Storage, Cloud Computing, SaaS and much more. This helps us to make more profits with your investment and in return you get the ultimate profit from your investment.</p>
                            <p>Investments that will make you grow</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-shape-six ml-50 rml-0 pr-30 wow fadeInRight delay-0-2s">
                    <img src="{{ asset('assets/images/about/about-six.png') }}" alt="About">
                    <img class="about-graph" src="{{ asset('assets/images/about/about-graph.png') }}" alt="Graph">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection