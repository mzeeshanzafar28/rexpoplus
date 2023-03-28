@php
use App\Models\User;
@endphp
@extends('Layouts.UserLayout')
@section('title', 'Invite Users')
@section('style')
    <style>
        /*----------------genealogy-scroll----------*/
        .genealogy-scroll::-webkit-scrollbar {
            width: 5px;
            height: 8px;
        }
        .genealogy-scroll::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: #e4e4e4;
        }
        .genealogy-scroll::-webkit-scrollbar-thumb {
            background: #212121;
            border-radius: 10px;
            transition: 0.5s;
        }
        .genealogy-scroll::-webkit-scrollbar-thumb:hover {
            background: #871A8F;
            transition: 0.5s;
        }


        /*----------------genealogy-tree----------*/
        .genealogy-body{
            white-space: nowrap;
            overflow-y: hidden;
            padding: 50px;
            min-height: 500px;
            padding-top: 10px;
            text-align: center;
        }
        .genealogy-tree{
        display: inline-block;
        }
        .genealogy-tree ul {
            padding-top: 20px; 
            position: relative;
            padding-left: 0px;
            display: flex;
            justify-content: center;
        }
        .genealogy-tree li {
            float: left; text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
        }
        .genealogy-tree li::before, .genealogy-tree li::after{
            content: '';
            position: absolute; 
        top: 0; 
        right: 50%;
            border-top: 2px solid #ccc;
            width: 50%; 
        height: 18px;
        }
        .genealogy-tree li::after{
            right: auto; left: 50%;
            border-left: 2px solid #ccc;
        }
        .genealogy-tree li:only-child::after, .genealogy-tree li:only-child::before {
            display: none;
        }
        .genealogy-tree li:only-child{ 
            padding-top: 0;
        }
        .genealogy-tree li:first-child::before, .genealogy-tree li:last-child::after{
            border: 0 none;
        }
        .genealogy-tree li:last-child::before{
            border-right: 2px solid #ccc;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }
        .genealogy-tree li:first-child::after{
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }
        .genealogy-tree ul ul::before{
            content: '';
            position: absolute; top: 0; left: 50%;
            border-left: 2px solid #ccc;
            width: 0; height: 20px;
        }
        .genealogy-tree li a{
            text-decoration: none;
            color: #666;
            /* font-family: arial, verdana, tahoma; */
            font-size: 11px;
            display: inline-block;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }

        .genealogy-tree li a:hover+ul li::after, 
        .genealogy-tree li a:hover+ul li::before, 
        .genealogy-tree li a:hover+ul::before, 
        .genealogy-tree li a:hover+ul ul::before{
            border-color:  #871A8F;
        }

        /*--------------memeber-card-design----------*/
        .member-view-box{
            padding:0px 20px;
            text-align: center;
            border-radius: 4px;
            position: relative;
        }
        .member-image{
            width: 60px;
            position: relative;
        }
        .member-image img{
            width: 60px;
            height: 60px;
            border-radius: 30px;
            z-index: 1;
        }
        .member-details{
            margin-top: 5px;
        }
        .member-details h3{
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
<main class="main-content w-full pb-8">
    <div class="container">
        <div class="text-center space-x-4 py-5 lg:py-6">
            <h2
              class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
            >
              Invited Users
            </h2>
        </div>
        <div class="text-center">
            <lottie-player src="{{asset('assets/animations/team.json')}}" background="transparent"  speed="1" style="height: 300px; display:block; margin-left:auto; margin-right:auto;"   loop autoplay></lottie-player>
          </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">My Team</h2>
                    </div>
                    <div class="card-body">
                        <div class="body genealogy-body genealogy-scroll">
                            <div class="genealogy-tree">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="{{ asset('uploads/'. $user->profile_pic) }}" alt="Member" style="object-fit: cover">
                                                    <div class="member-details">
                                                        <h3>{{ $user->name }}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        @php
                                            $level1Users = User::where('parent_id', $user->id)->get();
                                        @endphp
                                        <ul @if(count($level1Users) > 0) class="active" @endif>
                                            @foreach ($level1Users as $level1user)
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="member-view-box">
                                                        <div class="member-image">
                                                            <img src="{{ asset('uploads/'. $level1user->profile_pic) }}" alt="Member" style="object-fit: cover">
                                                            <div class="member-details">
                                                                <h3>{{ $level1user->name }}</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                @php
                                                    $level2Users = User::where('parent_id', $level1user->id)->get();
                                                @endphp
                                                <ul @if(count($level2Users) > 0 ) class="active" @endif>
                                                    @foreach($level2Users as $level2user)
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div class="member-view-box">
                                                                <div class="member-image">
                                                                    <img src="{{ asset('uploads/'. $level2user->profile_pic) }}" alt="Member" style="object-fit: cover">
                                                                    <div class="member-details">
                                                                        <h3>{{ $level2user->name }}</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        @php
                                                            $level3Users = User::where('parent_id', $level2user->id)->get();
                                                        @endphp
                                                        <ul @if(count($level3Users) > 0) class="active" @endif>
                                                            @foreach($level3Users as $level3user)
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <div class="member-view-box">
                                                                        <div class="member-image">
                                                                            <img src="{{ asset('uploads/' . $level3user->profile_pic) }}" alt="Member" style="object-fit: cover">
                                                                            <div class="member-details">
                                                                                <h3>{{ $level3user->name }}</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">Invite Others</h2>
                    </div>
                    <div class="card-body">
                        <div class="container text-center">
                            <p><b>Reference Link</b></p>
                            <p id="referLink">{{ Request::getSchemeAndHttpHost() }}/register/{{ Auth::user()->reference_code }}</p>
                            <br>
                            <p>Share this Link with other to invite them</p>
                            <br>
                            <button class="btn btn-primary btn-sm" id="btnCopy"><ion-icon name="clipboard-outline"></ion-icon></button>
                            <a href="https://api.whatsapp.com/send?text={{ Request::getSchemeAndHttpHost() }}/register/{{ Auth::user()->reference_code }}" data-action="share/whatsapp/share" class="btn btn-primary btn-sm"><ion-icon name="logo-whatsapp"></ion-icon></a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::getSchemeAndHttpHost() }}/register/{{ Auth::user()->reference_code }}" class="btn btn-primary btn-sm"><ion-icon name="logo-facebook"></ion-icon></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('script')
<script>
    $(function () {
        $('.genealogy-tree ul').hide();
        $('.genealogy-tree>ul').show();
        $('.genealogy-tree ul.active').show();
        $('.genealogy-tree li').on('click', function (e) {
            var children = $(this).find('> ul');
            if (children.is(":visible")) children.hide('fast').removeClass('active');
            else children.show('fast').addClass('active');
            e.stopPropagation();
        });
        $("#btnCopy").click(function(){
            const toCopy = $("#referLink").html();
            navigator.clipboard.writeText(toCopy);
            notyf.success('Invitation link copied!');
        });
    });
</script>
@endsection