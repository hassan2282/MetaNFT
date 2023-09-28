<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rainbowit.net/html/nuron/index-nine.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 13:52:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

    @include('parts.styles')

</head>

<body class="template-color-1 active-dark-mode" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" tabindex="0" >
@include('sweetalert::alert')
@include('parts.header')

<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo logo-custom-css">
                <a class="logo-light" href="index.html"><img src="{{asset('/assets/images/logo/logo-white.png')}}" alt="nft-logo"></a>
                <a class="logo-dark" href="index.html"><img src="{{asset('/assets/images/logo/logo-dark.png')}}" alt="nft-logo"></a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="feather-x"></i>
                </button>
            </div>
        </div>
        <nav>
            <!-- Start Mainmanu Nav -->
            <ul class="mainmenu">
                <li class="has-droupdown">
                    <a class="nav-link its_new" href="#">Home</a>
                    <ul class="submenu">
                        <li><a href="index.html">Home page One <i class="feather-home"></i></a></li>
                        <li><a href="index-two.html">Home page Two<i class="feather-home"></i></a></li>
                        <li><a href="index-three.html">Home page Three<i class="feather-home"></i></a></li>
                        <li><a href="index-four.html">Home page Four<i class="feather-home"></i></a></li>
                        <li><a href="index-five.html">Home page Five<i class="feather-home"></i></a></li>
                        <li><a href="index-six.html">Home page Six<i class="feather-home"></i></a></li>
                        <li><a href="index-seven.html">Home page Seven<i class="feather-home"></i></a></li>
                        <li><a href="index-eight.html">Home page Eight<i class="feather-home"></i></a></li>
                        <li><a href="index-nine.html">Home page Nine<i class="feather-home"></i></a></li>
                    </ul>
                </li>
                <li><a href="{{route('about')}}">About</a>
                </li>
                <li><a href="{{route('explore')}}">Explore</a>
                </li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
            <!-- End Mainmanu Nav -->
        </nav>
    </div>
</div>


    @yield('content')

    @include('parts.footer')

<!-- Modal -->
<div class="rn-popup-modal placebid-modal-wrapper modal fade" id="placebidModal" tabindex="-1" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Place a bid</h3>
            </div>
            <div class="modal-body">
                <p>You are about to purchase This Product Form Nuron</p>
                <div class="placebid-form-box">
                    <h5 class="title">Your bid</h5>
                    <div class="bid-content">
                        <div class="bid-content-top">
                            <div class="bid-content-left">
                                <input id="value" type="text" name="value">
                                <span>wETH</span>
                            </div>
                        </div>

                        <div class="bid-content-mid">
                            <div class="bid-content-left">
                                <span>Your Balance</span>
                                <span>Service fee</span>
                                <span>Total bid amount</span>
                            </div>
                            <div class="bid-content-right">
                                <span>9578 wETH</span>
                                <span>10 wETH</span>
                                <span>9588 wETH</span>
                            </div>
                        </div>
                    </div>
                    <div class="bit-continue-button">
                        <a href="connect.html" class="btn btn-primary w-100">Place a bid</a>
                        <button type="button" class="btn btn-primary-alta mt--10" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="rn-popup-modal share-modal-wrapper modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content share-wrapper">
            <div class="modal-header share-area">
                <h5 class="modal-title">Share this NFT</h5>
            </div>
            <div class="modal-body">
                <ul class="social-share-default">
                    <li><a href="#"><span class="icon"><i data-feather="facebook"></i></span><span class="text">facebook</span></a></li>
                    <li><a href="#"><span class="icon"><i data-feather="twitter"></i></span><span class="text">twitter</span></a></li>
                    <li><a href="#"><span class="icon"><i data-feather="linkedin"></i></span><span class="text">linkedin</span></a></li>
                    <li><a href="#"><span class="icon"><i data-feather="instagram"></i></span><span class="text">instagram</span></a></li>
                    <li><a href="#"><span class="icon"><i data-feather="youtube"></i></span><span class="text">youtube</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="rn-popup-modal report-modal-wrapper modal fade" id="reportModal" tabindex="-1" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content report-content-wrapper">
            <div class="modal-header report-modal-header">
                <h5 class="modal-title">Why are you reporting?
                </h5>
            </div>
            <div class="modal-body">
                <p>Describe why you think this item should be removed from marketplace</p>
                <div class="report-form-box">
                    <h6 class="title">Message</h6>
                    <textarea name="message" placeholder="Write issues"></textarea>
                    <div class="report-button">
                        <button type="button" class="btn btn-primary mr--10 w-auto">Report</button>
                        <button type="button" class="btn btn-primary-alta w-auto" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<!-- Start Top To Bottom Area  -->
<div class="rn-progress-parent">
    <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- End Top To Bottom Area  -->

    @include('parts.scripts')

</body>


<!-- Mirrored from rainbowit.net/html/nuron/index-nine.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 13:52:08 GMT -->
</html>
