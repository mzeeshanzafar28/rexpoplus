@extends('Layout')
@section('title', 'Verify Email')
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
                    <h3 class="comment-title mb-35">Verify Email</h3>
                    <p>We have sent you a code to your provided email. Enter the code below to verify your email</p>
                    <form id="register-form" class="comment-form mt-35" name="comment-form" action="{{ URL::to('/verify-email') }}" method="post" autocomplete="off">
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
                            {{-- <input type="hidden" name="id" value="{{ $user_id }}"> --}}
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name"><ion-icon name="key-outline"></ion-icon></label>
                                    <input type="text" name="code" class="form-control" value="" placeholder="Enter the Code" required="">
                                    @error('code')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-0">
                                    <button type="submit" id="btnSubmit" class="theme-btn">Verify Now</button>
                                </div>
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
        $("#btnSubmit").click(function(e){
            e.preventDefault();
            $("#btnSubmit").attr('disabled', true);
            $("#btnSubmit").text('Please Wait...');
            $("#register-form").submit();
        })
    </script>
@endsection