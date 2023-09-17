@extends('member.layouts.app')

@section('contents')
    <div style="background: linear-gradient(180deg, #EBEDF1 50%, rgba(37, 37, 37, 0.80) 100%);">
        <div class="container">
            <div class="row pt-5" style="margin-right: 0">
                <div
                    class="col mt-4 mt-sm-2 mt-md-5 mb-4 mb-sm-2 mb-md-5 mx-4 mx-xl-0 me-xl-5 title-design align-self-center">
                    <div class="row text-xl-center">
                        <p class="display-1 fw-semibold"
                            style="background: linear-gradient(90deg, #238795 32.29%, #ECD400 100%);
                            background-clip: text;
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;
                            line-height: unset;">
                            Our Team
                        </p>
                    </div>
                    <div class="row text-xl-center">
                        <p class="fs-5">
                            Meeting Creative คือ บริษัทรับออกแบบเว็บไซต์ กราฟิก เน็ตเวิร์ค รวมถึงบริการ
                            ด้านการตลาดออนไลน์
                        </p>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-6 col-sm-4 mt-3">
                            <button type="button" class="btn quotation">ขอใบเสนอราคา</button>
                        </div>
                        <div class="col-6 col-sm-4 mt-3">
                            <button type="button" class="btn learnmore">เรียนรู้เพิ่มเติม</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center mt-5">
                <div class="card bg-transparent border border-0 text-white">
                    <img src="{{ asset('image/lifestyle-people.svg') }}" style="max-width: 600px; width: 100%;"
                        class="img-design img-fluid card-img align-self-center">
                    <div class="card-body card-img-overlay d-flex flex-column justify-content-end">
                        <p class="card-title">Name Surname</p>
                        <p class="card-text">The most happiest time of the day!.
                            Praesent tristique hendrerit ex ut laoreet.</p>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-1 col-md-1 text-white me-3 me-md-0 me-lg-0">
                                <iconify-icon icon="et:facebook" class="img-fluid rounded" width="30"></iconify-icon>
                            </div>
                            <div class="col-1 col-md-1 text-white me-3 me-md-0 me-lg-0">
                                <iconify-icon icon="pepicons-pencil:phone-circle" class="img-fluid rounded"
                                    width="30"></iconify-icon>
                            </div>
                            <div class="col-1 col-md-1 text-white me-lg-0">
                                <iconify-icon icon="mdi:instagram" class="img-fluid rounded" width="30"></iconify-icon>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2">
                                <button type="button" class="btn btn-light rounded-pill text-uppercase"
                                    style="padding-inline: 15px">
                                    <i class="fa-regular fa-envelope"></i> Mail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-img2" style="display:flex; align-items: center;">
        <div class="container">
            <div class="row text-center">
                <p class="display-5 fw-semibold"
                    style="background: linear-gradient(90deg, #238795 0%, #31B0C2 51.56%, #ECD400 100%);
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    line-height: unset;">
                    Get in Touch With Us
                </p>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-5 col-sm-4 mt-3 mb-3">
                    <button type="button" class="btn quotation">เรียนรู้เพิ่มเติม</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach (File::glob(public_path('image/logo-customers') . '/*') as $path)
                    <div class="swiper-slide">
                        <img src="{{ str_replace(public_path(), '', $path) }}" class="img-fluid rounded mx-auto d-block"
                            width="300">
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endsection
