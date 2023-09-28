@extends('Layouts.main')
@section('title','Product-detail Page')
@section('content')
    <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Product Details</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->

    <!-- start product details area -->
    <div class="product-details-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <!-- product image area -->

                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="product-tab-wrapper rbt-sticky-top-adjust">
                        <div class="pd-tab-inner">
                            <div class="tab-content rn-pd-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="rn-pd-thumbnail">
                                        <img src="/{{$Nft->image_path}}" alt="Nft_Profile">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- product image area end -->

                <div class="col-lg-5 col-md-12 col-sm-12 mt_md--50 mt_sm--60">
                    <div class="rn-pd-content-area">
                        <div class="pd-title-area">
                            <h4 class="title">{{$Nft->name}}</h4>
                            <div class="pd-react-area">
                                <div class="count">
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="bid">Height bid <span class="price">0.11wETH</span></span>
                        <h6 class="title-name">
                            #22 Portal , Info bellow
                        </h6>
                        <div class="catagory-collection">
                            <div class="catagory">
                                <span>Catagory <span class="color-body">
                                        10% royalties</span></span>
                                <div class="top-seller-inner-one">
                                    <div class="top-seller-wrapper">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{{asset('/assets/images/client/client-1.png')}}" alt="Nft_Profile"></a>
                                        </div>
                                        <div class="top-seller-content">
                                            <a href="#">
                                                <h6 class="name">Brodband</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collection">
                                <span>Collections</span>
                                <div class="top-seller-inner-one">
                                    <div class="top-seller-wrapper">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{{asset('/assets/images/client/client-2.png')}}" alt="Nft_Profile"></a>
                                        </div>
                                        <div class="top-seller-content">
                                            <a href="#">
                                                <h6 class="name">Brodband</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary-alta" href="#">Unlockable content included</a>
                        <div class="rn-bid-details">
                            <div class="tab-wrapper-one">
                                <nav class="tab-button-one">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">Bids</button>
                                        <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Details</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">History</button>
                                    </div>
                                </nav>
                                <div class="tab-content rn-bid-content" id="nav-tabContent">
                                    <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <!-- single creator -->
                                        <div class="top-seller-inner-one">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-3.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span>0.11wETH by <a href="#">Allen Waltker</a></span>
                                                    <span class="count-number">
                                                        1 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single creator -->
                                        <!-- single creator -->
                                        <div class="top-seller-inner-one">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-4.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span>0.09wETH by <a href="#">Joe Biden</a></span>
                                                    <span class="count-number">
                                                        1.30 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single creator -->
                                        <!-- single creator -->
                                        <div class="top-seller-inner-one">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-5.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span>0.07wETH by <a href="#">Sonial mridha</a></span>
                                                    <span class="count-number">
                                                        1.35 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single creator -->
                                        <!-- single creator -->
                                        <div class="top-seller-inner-one">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-6.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span>0.07wETH by <a href="#">Tribute Dhusra</a></span>
                                                    <span class="count-number">
                                                        1.55 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single creator -->
                                        <!-- single creator -->
                                        <div class="top-seller-inner-one">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-7.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span>0.07wETH by <a href="#">Sonia Sobnom</a></span>
                                                    <span class="count-number">
                                                        2 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single creator -->
                                        <!-- single creator -->
                                        <div class="top-seller-inner-one">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-8.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span>0.02wETH by <a href="#">Sadia Rummon</a></span>
                                                    <span class="count-number">
                                                        2.5 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single creator -->
                                    </div>
                                    <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <!-- single -->
                                        <div class="rn-pd-bd-wrapper mt--20">
                                            <div class="top-seller-inner-one">
                                                <!-- <p class="disc">Lorem ipsum dolor, sit amet consectetur adipisicing
                                                    elit. Doloribus debitis nemo deserunt.</p> -->
                                                <h6 class="name-title">
                                                    Owner
                                                </h6>
                                                <div class="top-seller-wrapper">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('/assets/images/client/client-1.png')}}" alt="Nft_Profile"></a>
                                                    </div>
                                                    <div class="top-seller-content">
                                                        <a href="#">
                                                            <h6 class="name">Brodband</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="rn-pd-sm-property-wrapper">
                                                <h6 class="pd-property-title">
                                                    Property
                                                </h6>
                                                <div class="property-wrapper">
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">HYPE TYPE</span>
                                                        <span class="color-white value">CALM AF (STILL)</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">BASTARDNESS</span>
                                                        <span class="color-white value">C00LIO BASTARD</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">TYPE</span>
                                                        <span class="color-white value">APE</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">ASTARDNESS</span>
                                                        <span class="color-white value">BASTARD</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">BAD HABIT(S)</span>
                                                        <span class="color-white value">PIPE</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">BID</span>
                                                        <span class="color-white value">BPEYti</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">ASTRAGENAKAR</span>
                                                        <span class="color-white value">BASTARD</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">CITY</span>
                                                        <span class="color-white value">TOKYO</span>
                                                    </div>
                                                    <!-- single property End -->
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <!-- single -->
                                            <div class="rn-pd-sm-property-wrapper">
                                                <h6 class="pd-property-title">
                                                    Catagory
                                                </h6>
                                                <div class="catagory-wrapper">
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">ZARY</span>
                                                        <span class="color-white value">APP</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">SOMALIAN</span>
                                                        <span class="color-white value">TRIBUTE</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">TUNA</span>
                                                        <span class="color-white value">PIPE</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">BID</span>
                                                        <span class="color-white value">BPEYti</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">ASTRAGENAKAR</span>
                                                        <span class="color-white value">BASTARD</span>
                                                    </div>
                                                    <!-- single property End -->
                                                    <!-- single property -->
                                                    <div class="pd-property-inner">
                                                        <span class="color-body type">CITY</span>
                                                        <span class="color-white value">TOKYO</span>
                                                    </div>
                                                    <!-- single property End -->
                                                </div>
                                            </div>
                                            <!-- single -->
                                        </div>
                                        <!-- single -->
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <!-- single creator -->
                                        <div class="top-seller-inner-one mt--20">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-3.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span>0.11wETH by<a href="#">Allen Waltker</a></span>
                                                    <span class="count-number">
                                                        1 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single creator -->
                                        <!-- single creator -->
                                        <div class="top-seller-inner-one mt--20">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-2.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span>0.11wETH by<a href="#">Allen Waltker</a></span>
                                                    <span class="count-number">
                                                        1 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single creator -->
                                        <!-- single creator -->
                                        <div class="top-seller-inner-one mt--20">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-4.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span>0.11wETH by<a href="#">Allen Waltker</a></span>
                                                    <span class="count-number">
                                                        1 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single creator -->
                                        <!-- single creator -->
                                        <div class="top-seller-inner-one mt--20">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-5.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span>0.11wETH by<a href="#">Allen Waltker</a></span>
                                                    <span class="count-number">
                                                        1 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single creator -->
                                        <!-- single creator -->
                                        <div class="top-seller-inner-one mt--20">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-8.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span>0.11wETH by<a href="#">Allen Waltker</a></span>
                                                    <span class="count-number">
                                                        1 hours ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single creator -->
                                    </div>
                                </div>
                            </div>
                            <div class="place-bet-area">
                                <div class="rn-bet-create">
                                    <div class="bid-list winning-bid">
                                        <h6 class="title">Winning bit</h6>
                                        <div class="top-seller-inner-one">
                                            <div class="top-seller-wrapper">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="{{asset('/assets/images/client/client-7.png')}}" alt="Nft_Profile"></a>
                                                </div>
                                                <div class="top-seller-content">
                                                    <span class="heighest-bid">Heighest bid <a href="#">Atif
                                                            aslam</a></span>
                                                    <span class="count-number">
                                                        0.115wETH
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bid-list left-bid">
                                        <h6 class="title">Auction has ended</h6>
                                        <div class="countdown mt--15" data-date="2025-12-09">
                                            <div class="countdown-container days">
                                                <span class="countdown-value">87</span>
                                                <span class="countdown-heading')}}">D's</span>
                                            </div>
                                            <div class="countdown-container hours">
                                                <span class="countdown-value">23</span>
                                                <span class="countdown-heading')}}">H's</span>
                                            </div>
                                            <div class="countdown-container minutes">
                                                <span class="countdown-value">38</span>
                                                <span class="countdown-heading')}}">Min's</span>
                                            </div>
                                            <div class="countdown-container seconds">
                                                <span class="countdown-value">27</span>
                                                <span class="countdown-heading')}}">Sec</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a class="btn btn-primary-alta mt--30" href="#">Place a Bid</a> -->
                                <button type="button" class="btn btn-primary-alta mt--30" data-bs-toggle="modal" data-bs-target="#placebidModal">Place a Bid</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End product details area -->


    <!-- New items Start -->
    <div class="rn-new-items rn-section-gapTop">
        <div class="container">
            <div class="row mb--30 align-items-center">
                <div class="col-12">
                    <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Recent View</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{asset('/assets/images/portfolio/portfolio-01.jpg')}}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-1.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone Due"><img src="{{asset('/assets/images/client/client-2.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Nisat Tara"><img src="{{asset('/assets/images/client/client-3.png')}}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">9+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">Preatent</span></a>
                        <span class="latest-bid">Highest bid 1/20</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">322</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{asset('/assets/images/portfolio/portfolio-02.jpg')}}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-4.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Nira Ara"><img src="{{asset('/assets/images/client/client-5.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Fatima Afrafy"><img src="{{asset('/assets/images/client/client-6.png')}}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">10+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">Diamond Dog</span></a>
                        <span class="latest-bid">Highest bid 5/11</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.892wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">420</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{asset('/assets/images/portfolio/portfolio-03.jpg')}}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-1.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Janin Ara"><img src="{{asset('/assets/images/client/client-8.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Atif Islam"><img src="{{asset('/assets/images/client/client-9.png')}}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">10+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">OrBid6</span></a>
                        <span class="latest-bid">Highest bid 2/31</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.2128wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">12</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{asset('/assets/images/portfolio/portfolio-04.jpg')}}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-1.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-3.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-5.png')}}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">8+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">Morgan11</span></a>
                        <span class="latest-bid">Highest bid 3/16</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.265wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="350" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{asset('/assets/images/portfolio/portfolio-05.jpg')}}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-2.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-7.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-9.png')}}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">15+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">mAtal8</span></a>
                        <span class="latest-bid">Highest bid 6/50</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">205</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
            </div>
        </div>
    </div>
    <!-- New items End -->

    <!-- New items Start -->
    <div class="rn-new-items rn-section-gapTop">
        <div class="container">
            <div class="row mb--30 align-items-center">
                <div class="col-12">
                    <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Related Item</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{asset('/assets/images/portfolio/portfolio-01.jpg')}}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-1.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone Due"><img src="{{asset('/assets/images/client/client-2.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Nisat Tara"><img src="{{asset('/assets/images/client/client-3.png')}}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">9+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">Preatent</span></a>
                        <span class="latest-bid">Highest bid 1/20</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">322</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{asset('/assets/images/portfolio/portfolio-02.jpg')}}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-4.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Nira Ara"><img src="{{asset('/assets/images/client/client-5.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Fatima Afrafy"><img src="{{asset('/assets/images/client/client-6.png')}}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">10+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">Diamond Dog</span></a>
                        <span class="latest-bid">Highest bid 5/11</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.892wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">420</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{asset('/assets/images/portfolio/portfolio-03.jpg')}}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-1.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Janin Ara"><img src="{{asset('/assets/images/client/client-8.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Atif Islam"><img src="{{asset('/assets/images/client/client-9.png')}}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">10+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">OrBid6</span></a>
                        <span class="latest-bid">Highest bid 2/31</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.2128wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">12</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{asset('/assets/images/portfolio/portfolio-04.jpg')}}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-1.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-3.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-5.png')}}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">8+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">Morgan11</span></a>
                        <span class="latest-bid">Highest bid 3/16</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.265wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="350" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="{{asset('/assets/images/portfolio/portfolio-05.jpg')}}" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-2.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-7.png')}}" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="{{asset('/assets/images/client/client-9.png')}}" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">15+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">mAtal8</span></a>
                        <span class="latest-bid">Highest bid 6/50</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">205</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
            </div>
        </div>
    </div>
    <!-- New items End -->

@endsection
