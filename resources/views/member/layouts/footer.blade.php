@section('footer')
    <div style="background-color: #434344;">
        <div class="container">
            <div class="row align-items-center text-center justify-content-center">
                <div class="col-10 col-md col-lg">
                    <img src="{{ asset('/image/MC Logo-01 1.svg') }}" class="img-fluid rounded mx-auto d-block" width="300">
                </div>
                <div class="col-12 col-md-7 col-lg-6 mt-3">
                    <p class="text-white text-uppercase fs-3" style="margin-bottom: 0rem !important;">“ Everyday is a fresh
                        start ”</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-3">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-1 col-md-1 text-white me-3 me-md-3 me-xl-4">
                            <iconify-icon icon="et:facebook" class="img-fluid rounded mx-auto d-block"
                                width="35"></iconify-icon>
                        </div>
                        <div class="col-1 col-md-1 text-white me-2 me-sm-0 me-lg-2 me-xl-3">
                            <i class="fa-brands fa-line fa-2xl"></i>
                        </div>
                        <div class="col-6 col-sm-5 col-md-7 col-xl-8 col-xxl-7 text-start text-sm-center">
                            <button type="button" class="btn btn-light rounded-pill text-uppercase"
                                style="padding-inline: 15px">
                                <i class="fa-solid fa-phone"> 064-4599997</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="border border-light border-1 opacity-50">
        <div class="container">
            <div class="row">
                <p class="text-white text-center mb-3 text-footer">©Copyright 2023 Meeting Creative All Rights Reserved</p>
            </div>
        </div>
    </div>
@endsection
