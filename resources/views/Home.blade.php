@extends('Layout')
@section('title', 'Home')
@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section-six bg-lighter z-1 rel pt-80 rpt-65">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero-content-six mr-10 rmr-0 py-100 rpy-80">
                        <span class="sub-title d-block wow fadeInUp delay-0-2s">Because we care</span>
                        <h1 class="wow fadeInUp delay-0-4s mt-20">Owned by you, driven by us.</h1>
                        <p class="wow fadeInUp delay-0-6s">Invest for a more comfortable life, invest for a happier life</p>
                        <div class="hero-btns mt-35 wow fadeInUp delay-0-8s">
                            <a href="#" class="theme-btn mr-25 mb-10">Discover More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-six-images wow fadeInRight delay-0-8s">
                        <img src="{{ asset('assets/images/all/main.png') }}" alt="Hero"
                            style="height: 400px;width: auto;margin-left: 150px;">
                        <img src="{{ asset('assets/images/all/graph-analysis.png') }}" alt="Hero">
                        <img src="{{ asset('assets/images/all/secondry.png') }}" alt="Hero">
                        <img src="{{ asset('assets/images/hero/hero-six-ellipse.png') }}" alt="Ellipse">
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
    <!-- Hero Section End -->


    <!-- What We Do Start -->
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
    <!-- What We Do End -->

    <!-- About Section Start -->
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
                            {{-- <span class="sub-title" style="color: white">It Support For Business</span> --}}
                            <h2>Efficiently scalable, easily manageable, undeniably powerful</h2>
                        </div>
                        <p>In order to build your wealth, you will want to invest your money. Investing allows you to put
                            your money in vehicles that have the potential to earn strong rates of return.</p>
                        <ul class="list-style-one mt-15">
                            <li>Grow Your Money</li>
                            <li>Save for Retirement</li>
                            <li>Earn Higher Returns</li>
                            <li>Reach Financial Goals</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fact-counter-inner br-5 px-25 pt-80 pb-30 text-white text-center"
                style="background-color: #871A8F;">
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
    <!-- About Section End -->


    <!-- About Section Start -->
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
                                <p>We take your investments and Invest in world's top digital services including iCloud
                                    Storage, Cloud Computing, SaaS and much more. This helps us to make more profits with
                                    your investment and in return you get the ultimate profit from your investment.</p>
                                <p>Investments that will make you grow</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-shape-six ml-50 rml-0 pr-30 wow fadeInRight delay-0-2s">
                        <img src="{{ asset('assets/images/about/about-six.png') }}" alt="About">
                        <img class="about-graph" src="{{ asset('assets/images/about/about-graph.png') }}"
                            alt="Graph">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- Call To Action Start -->
    <section class="call-to-action-two bgs-cover pt-90 pb-65"
        style="background-image: url({{ asset('assets/images/background/call-action-bg.png') }});">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 wow fadeInUp delay-0-2s">
                    <div class="section-title text-white mb-25">
                        <h2>Trust in us.</h2>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp delay-0-4s">
                    <a href="#" class="theme-btn style-three mb-25">Get started Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->
    <!-- Customization Section Start -->
    <section class="customization-section py-75 rpy-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="customization-images wow fadeInLeft delay-0-2s">
                        <img src="assets/images/about/customization-1.png" alt="customization">
                        <img src="assets/images/about/customization2.png" alt="customization">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="customization-content mr-100 rmr-0 pb-35 rpb-40 rpt-50 wow fadeInRight delay-0-2s">
                        <div class="section-title mb-25">
                            <h2>How It Works</h2>
                        </div>
                        <p>3 easy steps to get started.</p>
                        <div class="service-item-six">
                            <div class="icon">
                                <span>1</span>
                            </div>
                            <div class="service-content">
                                <h5>Create Account</h5>
                                <p>Create an account on Rexpoplus to get start</p>
                            </div>
                        </div>
                        <div class="service-item-six">
                            <div class="icon">
                                <span>2</span>
                            </div>
                            <div class="service-content">
                                <h5>Deposit Amount</h5>
                                <p>Use payment method like Mastercard, Visa or Crypto to deposit funds</p>
                            </div>
                        </div>
                        <div class="service-item-six">
                            <div class="icon">
                                <span>3</span>
                            </div>
                            <div class="service-content">
                                <h5>Choose Plan</h5>
                                <p>Choose any of our investment plans</p>
                            </div>
                        </div>
                        <div class="service-item-six">
                            <div class="icon">
                                <span>4</span>
                            </div>
                            <div class="service-content">
                                <h5>Get Your Profit</h5>
                                <p>Wait for a specific time according to plan and earn profits</p>
                            </div>
                        </div>
                        <a href="#" class="theme-btn mt-15">Discover More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customization Section End -->
@endsection
