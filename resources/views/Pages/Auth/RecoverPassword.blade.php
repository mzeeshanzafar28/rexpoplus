@extends('Layout')
@section('title', 'Recover Password')
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
                    <h3 class="comment-title mb-35">Recover Password</h3>
                    <p>Set a new password for your account</p>
                    <form id="register-form" class="comment-form mt-35" name="comment-form" action="{{ URL::to('/recover-password') }}" method="post" autocomplete="off">
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
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name"><ion-icon name="lock-closed-outline"></ion-icon></label>
                                    <input type="password" name="password" class="form-control" value="" placeholder="Enter New Password" required="">
                                    @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name"><ion-icon name="lock-closed-outline"></ion-icon></label>
                                    <input type="password" name="password_confirmation" class="form-control" value="" placeholder="Confirm Password" required="">
                                    @error('password_confirmation')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-0">
                                    <button type="submit" id="btnSubmit" class="theme-btn">Update Password</button>
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