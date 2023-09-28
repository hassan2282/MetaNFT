@extends('layouts.main')
@section('title','Author Page')
@section('content')

    <div class="rn-author-bg-area bg_image--9 bg_image ptb--150">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

    <div class="rn-author-area mb--30 mt_dec--120">
        <div class="container">
            <div class="row padding-tb-50 align-items-center d-flex">
                <div class="col-lg-12">
                    <div class="author-wrapper">
                        <div class="author-inner">
                            <div class="user-thumbnail">
                                <img src="{{$user->avatar}}" alt="">
                            </div>
                            <div class="rn-author-info-content">
                                <h4 class="title">{{$user->name}}</h4>
                                <a href="#" class="social-follw">
                                    <i data-feather="twitter"></i>
                                    <span class="user-name">{{$user->name}}</span>
                                </a>
                                <div class="follow-area">
                                    <div class="follow followers">
                                        <span>186k <a href="" class="color-body">followers</a></span>
                                    </div>
                                    <div class="follow following')}}">
                                        <span>156 <a href="#" class="color-body">following</a></span>
                                    </div>
                                </div>
                                <div class="author-button-area">
                                    <span class="btn at-follw follow-button"><i data-feather="user-plus"></i>
                                        Follow</span>
                                    @if(auth()->user()->isAdmin == 1 || auth()->user()->isVendor == 1)
                                        @can('vendor')
                                            <a href="{{route('admin')}}">
                                            <span class="btn at-follw follow-button"><i data-feather="user-plus"></i>
                                            Admin Panel</span>
                                            </a>
                                        @endcan
                                    @endif

                                    <span class="btn at-follw share-button" data-bs-toggle="modal" data-bs-target="#shareModal"><i data-feather="share-2"></i></span>

                                    <div class="count at-follw">
                                        <div class="share-btn share-btn-activation dropdown">
                                            <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                                </svg>
                                            </button>

                                            <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                                <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                    Report
                                                </button>
                                                <button type="button" class="btn-setting-text report-text">
                                                    Claim Owenership
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rn-authore-profile-area">
    <div class="rn-authore-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-wrapper-one">
                        <nav class="tab-button-one">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">On Sale</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Owned</button>
                                <button class="nav-link active" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Created</button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="tab-content rn-bid-content" id="nav-tabContent">
                <div class="tab-pane row g-5 d-flex fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <!-- start single product -->
                    <div class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-one no-overlay with-placeBid">
                            <div class="card-thumbnail">
                                <a href="product-details.html">
                                    <img src="{{asset('/assets/images/portfolio/portfolio-09.jpg')}}" alt="NFT_portfolio">
                                </a>
                                <a href="product-details.html" class="btn btn-primary">Place Bid</a>
                            </div>
                            <div class="product-share-wrapper">
                                <div class="profile-share">
                                    <a href="author.html" class="avatar" data-tooltip="Sadikur Ali"><img src="{{asset('/assets/images/client/client-2.png')}}" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Ali"><img src="{{asset('/assets/images/client/client-3.png')}}" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Sadikur"><img src="{{asset('/assets/images/client/client-4.png')}}" alt="Nft_Profile"></a>
                                    <a class="more-author-text" href="#">9+ Place Bit.</a>
                                </div>
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
                            <a href="product-details.html"><span class="product-name">BadBo66</span></a>
                            <span class="latest-bid">Highest bid 6/20</span>
                            <div class="bid-react-area">
                                <div class="last-bid">0.234wETH</div>
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
                    </div>
                <div class="tab-pane row g-5 d-flex fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <!-- start single product -->
                    <div class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-one no-overlay with-placeBid">
                            <div class="card-thumbnail">
                                <a href="product-details.html">
                                    <img src="{{asset('/assets/images/portfolio/portfolio-06.jpg')}}" alt="NFT_portfolio">
                                </a>
                                <a href="product-details.html" class="btn btn-primary">Place Bid</a>
                            </div>
                            <div class="product-share-wrapper">
                                <div class="profile-share">
                                    <a href="author.html" class="avatar" data-tooltip="Tawhid Sabir"><img src="{{asset('/assets/images/client/client-1.png')}}" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Tawhid"><img src="{{asset('/assets/images/client/client-10.png')}}" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Sabir"><img src="{{asset('/assets/images/client/client-11.png')}}" alt="Nft_Profile"></a>
                                    <a class="more-author-text" href="#">5+ Place Bit.</a>
                                </div>
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
                            <a href="product-details.html"><span class="product-name">NameStroam</span></a>
                            <span class="latest-bid">Highest bid 1/20</span>
                            <div class="bid-react-area">
                                <div class="last-bid">0.244wETH</div>
                                <div class="react-area">
                                    <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                        <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    <span class="number">532</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single product -->
                </div>
                <div class="tab-pane row g-5 d-flex fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    @foreach($Nfts as $Nft)
                        <!-- start single product -->
                        <div class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{route('product-detail', $Nft)}}">
                                        <img src="/{{$Nft->image_path}}" alt="NFT_portfolio">
                                    </a>
                                    <a href="{{route('product-detail', $Nft)}}" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{route('Nft.show', $Nft->id)}}" class="avatar" data-tooltip="Sadikur Ali"><img src="{{asset('/assets/images/client/client-2.png')}}" alt="Nft_Profile"></a>
                                        <a href="{{route('Nft.show', $Nft->id)}}" class="avatar" data-tooltip="Ali"><img src="{{asset('/assets/images/client/client-3.png')}}" alt="Nft_Profile"></a>
                                        <a href="{{route('Nft.show', $Nft->id)}}" class="avatar" data-tooltip="Sadikur"><img src="{{asset('/assets/images/client/client-4.png')}}" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">9+ Place Bit.</a>
                                    </div>
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
                                <a href="{{route('product-detail', $Nft)}}"><span class="product-name">{{$Nft->name}}</span></a>
                                <span class="latest-bid">Highest bid 6/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.234wETH</div>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection()
