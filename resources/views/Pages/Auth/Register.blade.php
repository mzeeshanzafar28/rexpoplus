@extends('Layout')
@section('title', 'Register')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"
integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg=="
crossorigin="anonymous" />
<style>
    .checkmark{
        color: rgb(173, 173, 173);
    }
    .checkmark-active{
        color: black
    }
    .checkmark-active ion-icon{
        color: green;
    }
</style>
@endsection
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
                    <h3 class="comment-title mb-35">Register</h3>
                    <p>Register now to Rexpoplus and enjoy the ultimate investment platform.</p>
                    <form id="register-form" class="comment-form mt-35" name="comment-form" action="{{ URL::to('/register') }}" method="post" autocomplete="off">
                        <!--<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />-->
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
                        <div class="row clearfix justify-content-center">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name"><ion-icon name="person-outline"></ion-icon></label>
                                    <input type="text" name="name" class="form-control" value="{{old('name') ?? ''}}" placeholder="Full Name" required="">
                                    @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email"><ion-icon name="mail-outline"></ion-icon></label>
                                    <input type="email" name="email" class="form-control" value="{{old('email' ?? '')}}" placeholder="Email" required="">
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone"><i class="far fa-user"></i></label>
                                    <input type="text" id="phone" class="form-control" value="{{old('phone') ?? ''}}" placeholder=" Phone Number" required="">
                                    <input type="hidden" id="phone_updated" name="phone">
                                    @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reference_code"><ion-icon name="person-add-outline"></ion-icon></label>
                                    <input type="text" id="reference_code" @if($reference_link) readonly @endif name="reference_code" class="form-control" value="{{ isset($reference_link) ? $reference_link : old('reference_code') ?? '' }}" placeholder="Reference Code" required="">
                                    @error('reference_code')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password"><ion-icon name="finger-print-outline"></ion-icon></label>
                                    <input type="password" name="password" id="password_input" class="form-control" value="" placeholder="Password" required="">
                                    @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="security_code"><ion-icon name="lock-closed-outline"></ion-icon></label>
                                    <input type="password" id="security_code" name="security_code" class="form-control" value="{{old('security_code') ?? ''}}" placeholder="Security Code" required="">
                                    @error('security_code')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12" style="font-size: 14px;">
                                <span class="checkmark" id="capital_check"><ion-icon name="checkmark-outline"></ion-icon> A capital(uppercase) letter</span> &emsp;
                                <span class="checkmark" id="lowercase_check"><ion-icon name="checkmark-outline"></ion-icon> A lowercase letter</span> &emsp;
                                <span class="checkmark" id="number_check"><ion-icon name="checkmark-outline"></ion-icon> A number</span> &emsp;
                                <span class="checkmark" id="length_check"><ion-icon name="checkmark-outline"></ion-icon> Minimum 8 characters</span> &emsp;
                            </div>
                            <div class="col-sm-12" id="password_error" style="display: none">
                                <small class="text-danger">Please complete all the password requirements to continue</small>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <span>By clicking Register Now. You agree to our <a href="#" style="color:#871A8F">Terms & Conditions</a></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-0">
                                    <button type="submit" id="btnSubmit" class="theme-btn">Register Now</button>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <span>Already have an account? <a href="{{ URL::to('login') }}" style="color:#871A8F">Login Now</a></span>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"
        integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        integrity="sha512-BNZ1x39RMH+UYylOW419beaGO0wqdSkO7pi1rYDYco9OL3uvXaC/GTqA5O4CVK2j4K9ZkoDNSSHVkEQKkgwdiw=="
        crossorigin="anonymous"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        separateDialCode: true,
        customPlaceholder: function (
            selectedCountryPlaceholder,
            selectedCountryData
        ) {
            return "e.g. " + selectedCountryPlaceholder;
        },
    });
    $('.iti.iti--allow-dropdown').css('width', '100%');
    let number_check = false;
    let capital_check = false;
    let lowercase_check = false;
    let length_check = false;
    $("#password_input").keyup(function (e) { 
        var password = e.target.value;

        if(password.search(/[A-Z]/) >= 0){
            $("#capital_check").removeClass('checkmark');
            $("#capital_check").addClass('checkmark-active');
            capital_check = true;
        }else{
            $("#capital_check").addClass('checkmark');
            $("#capital_check").removeClass('checkmark-active');
            capital_check = false;
        }
        
        if(password.search(/[a-z]/) >= 0){
            $("#lowercase_check").removeClass('checkmark');
            $("#lowercase_check").addClass('checkmark-active');
            lowercase_check = true;
        }else{
            $("#lowercase_check").addClass('checkmark');
            $("#lowercase_check").removeClass('checkmark-active');
            lowercase_check = false;
        }
        
        if(password.search(/[0-9]/) >= 0){
            $("#number_check").removeClass('checkmark');
            $("#number_check").addClass('checkmark-active');
            number_check = true;
        }else{
            $("#number_check").addClass('checkmark');
            $("#number_check").removeClass('checkmark-active');
            number_check = false;
        }

        if(password.length >= 8){
            $("#length_check").removeClass('checkmark');
            $("#length_check").addClass('checkmark-active');
            length_check = true;
        }else{
            $("#length_check").addClass('checkmark');
            $("#length_check").removeClass('checkmark-active');
            length_check = false;
        }
    });
    $("#btnSubmit").click(function (e) { 
        e.preventDefault();
        $("#password_error").hide();
        let code = $(".iti__selected-dial-code").text();
        let phone = $("#phone").val();
        if(phone.length > 0){
            $("#phone_updated").val(code+phone);
        }
        if(number_check && length_check && lowercase_check && capital_check){
            $("#btnSubmit").attr('disabled', true);
            $("#btnSubmit").text('Please Wait...');
            $("#password_error").hide();
            $("#_token").val("{{ csrf_token() }}");
            $("#register-form").submit();
        }else{
            $("#password_error").show();
        }
    });
</script>
@endsection