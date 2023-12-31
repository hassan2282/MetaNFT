@extends('layouts.main')
@section('title','User Creation')
@section('content')
    <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Crete a New NFT</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="/">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Crete a New File</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->


    <!-- create new product area -->
    <div class="create-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 offset-1 ml_md--0 ml_sm--0">
                    <div class="mt--100 mt_sm--30 mt_md--30 d-none d-lg-block">
                        <h5> Note: </h5>
                        <span> Service fee : <strong>2.5%</strong> </span> <br>
                        <span> You will receive : <strong>25.00 ETH $50,000</strong></span>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div class="form-wrapper-one">
                        <form class="row" method="POST" action="{{route('Nft.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input id="name" name="name" placeholder="e. g. `Digital Awesome Game`">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="Discription" class="form-label">Discription</label>
                                    <textarea id="Discription" name="discription" rows="3" placeholder="e. g. “After purchasing the product you can get item...”"></textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-box pb--20">
                                    <label for="dollerValue" class="form-label">Item Price in $</label>
                                    <input id="dollerValue" name="prise" placeholder="e. g. `20$`">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-box pb--20">
                                    <label for="Size" class="form-label">Size</label>
                                    <input id="Size" name="size" placeholder="e. g. `Size`">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-box pb--20">
                                    <label for="Propertie" class="form-label">Propertie</label>
                                    <input id="Propertie" name="propertie" placeholder="e. g. `Propertie`">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="Royality" class="form-label">Royality</label>
                                    <input id="Royality" name="royality" placeholder="e. g. `20%`">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="exampleInputFile" class="form-label">Image</label>
                                    <input type="file" id="exampleInputFile" name="image" required>
                                </div>

                            <div class="col-md-12 col-xl-12 mt_lg--15 mt_md--15 mt_sm--15">
                                <div class="input-box">
                                    <button type="submit" class="btn btn-primary btn-large w-100">Submit Item</button>
                                </div>
                            </div>
                    </div>
                        </form>
                </div>

                <div class="mt--100 mt_sm--30 mt_md--30 d-block d-lg-none">
                    <h5> Note: </h5>
                    <span> Service fee : <strong>2.5%</strong> </span> <br>
                    <span> You will receive : <strong>25.00 ETH $50,000</strong></span>
                </div>
            </div>
        </div>
    </div>
    <!-- create new product area -->


    <!-- Modal -->
    <div class="rn-popup-modal upload-modal-wrapper modal fade" id="uploadModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content share-wrapper">
                <div class="modal-body">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="assets/images/portfolio/portfolio-05.jpg" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="assets/images/client/client-3.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">9+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">

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
            </div>
        </div>
    </div>

@endsection
