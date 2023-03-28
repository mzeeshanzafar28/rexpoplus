@extends('Layout')
@section('title', 'Login')
@section('content')
<section class="contact-page py-120 rpy-100">
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <lottie-player src="{{ asset('assets/animations/register.json') }}" background="transparent" speed="1" loop autoplay></lottie-player>
            </div>
            <div class="col-lg-8">
                <div class="contact-form ml-40 rml-0 rmt-55 wow fadeInRight delay-0-2s">
                    <h3 class="comment-title mb-35">Login</h3>
                    <p>Login now to Rexpoplus and enjoy the ultimate investment platform.</p>
                    <form id="register-form" class="comment-form mt-35" name="comment-form" action="{{ URL::to('/login') }}" method="post" autocomplete="off">
                        @csrf
                        @if(Session::has('message'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(Session::has('success_message'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ Session::get('success_message') }}
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row clearfix justify-content-center">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email"><ion-icon name="mail-outline"></ion-icon></label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') ?? '' }}" placeholder="Email" required="">
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <span><a href="{{ URL::to('forgot-password') }}" style="color:#871A8F">Forgot Password?</a></span>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="password"><ion-icon name="finger-print-outline"></ion-icon></label>
                                    <input type="password" name="password" class="form-control" value="" placeholder="Password" required="">
                                    @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-0">
                                    <button type="submit" id="btnSubmit" class="theme-btn">Login</button>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <span>Don't have an account? <a href="{{ URL::to('register') }}" style="color:#871A8F">Create Now</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $("#btnSubmit").click(function (e) { 
        e.preventDefault();
        $("#btnSubmit").attr('disabled', true);
        $("#btnSubmit").text('Please Wait...');
        $("#register-form").submit();
    });
</script>
@endsection