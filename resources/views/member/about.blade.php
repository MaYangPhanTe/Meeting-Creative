@extends('member.layouts.app')

@section('contents')
    <div style="background-image: linear-gradient(#EBEDF1, #FFFFFF); height: 600px; display:flex; align-items: center;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7">
                    <h1 class="display-1 fw-semibold"
                        style="background-image: linear-gradient(to right, #238795, #ECD400); -webkit-background-clip: text; background-clip: text; color: transparent; line-height: unset;">
                        About us</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-xl-6">
                    <p class="fs-5">Meeting Creative คือ บริษัทรับออกแบบเว็บไซต์ กราฟิก เน็ตเวิร์ค รวมถึงบริการ
                        ด้านการตลาดออนไลน์</p>
                </div>
            </div>
            <div class="row justify-content-center text-center mt-3">
                <div class="col-5 col-sm-4 col-lg-2">
                    <button type="button" class="btn quotation">ขอใบเสนอราคา</button>
                </div>
                <div class="col-5 col-sm-4 col-lg-2">
                    <button type="button" class="btn learnmore">เรียนรู้เพิ่มเติม</button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-img3" style="display:flex; align-items: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-lg-8">
                    <p class="text-white text-center fs-3">Meeting Creative คือ บริษัทรับออกแบบเว็บไซต์ กราฟิก เน็ตเวิร์ค
                        รวมถึงบริการด้านการตลาดออนไลน์</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="conference-timeline mx-auto position-relative d-none d-lg-block">
            <div class="conference-timeline-content">
                <div class="timeline-article">
                    <div class="conference-center-line position-absolute h-100"></div>
                    <div class="content-left-container">
                        <div class="content-left text-start text-xl-end">
                            <p class="fs-5">ผู้ก่อตั้ง Meeting Creative</p>
                            <p class="fs-6">The world is a dangerous place to live; not because of the people who are
                                evil,
                                but because of the people who don't do anything about it.</p>
                        </div>
                    </div>
                    <div class="content-right-container">
                        <div class="content-right">
                            <img src="{{ asset('/image/Ellipse 42.svg') }}" class="img-fluid"
                                style="max-width: 200px; width: 100%">
                        </div>
                    </div>
                    <div class="meta-step">
                        <span class="step-text">STEP</span>
                        <span class="step-num">01</span>
                    </div>
                </div>
                <div class="timeline-article">
                    <div class="conference-center-line position-absolute h-100"></div>
                    <div class="content-left-container">
                        <div class="content-left text-start text-xl-end">
                            <img src="{{ asset('/image/Ellipse 43.svg') }}" class="img-fluid"
                                style="-webkit-transform: scaleX(-1); transform: scaleX(-1); max-width: 200px; width: 100%">
                        </div>
                    </div>
                    <div class="content-right-container">
                        <div class="content-right">
                            <p class="fs-5 text-start">สิ่งที่พวกเราทำ</p>
                        </div>
                    </div>
                    <div class="meta-step">
                        <span class="step-text">STEP</span>
                        <span class="step-num">02</span>
                    </div>
                </div>
                <div class="timeline-article">
                    <div class="conference-center-line position-absolute h-100"></div>
                    <div class="content-left-container">
                        <div class="content-left text-start text-xl-end">
                            <p class="fs-5">Meeting Creative</p>
                        </div>
                    </div>
                    <div class="content-right-container">
                        <div class="content-right">
                            <img src="{{ asset('/image/Ellipse 42.svg') }}" class="img-fluid"
                                style="max-width: 200px; width: 100%">
                        </div>
                    </div>
                    <div class="meta-step">
                        <span class="step-text">STEP</span>
                        <span class="step-num">03</span>
                    </div>
                </div>
                <div class="timeline-article">
                    <div class="content-left-container">
                        <div class="content-left text-start text-xl-end">
                            <img src="{{ asset('/image/Ellipse 43.svg') }}" class="img-fluid"
                                style="-webkit-transform: scaleX(-1); transform: scaleX(-1); max-width: 200px; width: 100%">
                        </div>
                    </div>
                    <div class="content-right-container">
                        <div class="content-right">
                            <p class="fs-5 text-start">ตอนนี้เรา ?</p>
                        </div>
                    </div>
                    <div class="meta-step">
                        <span class="step-text">STEP</span>
                        <span class="step-num">04</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Mobile Timeline --}}
        <div class="swiper swiperTimeline">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row d-lg-none text-center justify-content-center">
                        <p class="fs-6 fw-medium mt-5" style="color: #238593">STEP<br><span
                                class="fs-3 fw-semibold">01</span></p>
                        <img src="{{ asset('/image/Ellipse 42.svg') }}" class="img-fluid"
                            style="-webkit-transform: scaleX(1); transform: scaleX(1); max-width: 200px; width: 100%">
                        <p class="fs-2 mt-4" style="color: #535354">ผู้ก่อตั้ง Meeting Creative</p>
                        <p class="mt-2" style="#535354">The world is a dangerous place to live; not because of the people
                            who are
                            evil,
                            but because of the people who don't do anything about it.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row d-lg-none text-center justify-content-center mb-3">
                        <p class="fs-6 fw-medium mt-5" style="color: #238593">STEP<br><span
                                class="fs-3 fw-semibold">02</span></p>
                        <img src="{{ asset('/image/Ellipse 43.svg') }}" class="img-fluid"
                            style="-webkit-transform: scaleX(-1); transform: scaleX(-1); max-width: 200px; width: 100%">
                        <p class="fs-2 mt-4" style="color: #535354">สิ่งที่พวกเราทำ</p>
                        <p class="mt-2" style="#535354">The world is a dangerous place to live; not because of the
                            people
                            who are
                            evil,
                            but because of the people who don't do anything about it.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row d-lg-none text-center justify-content-center">
                        <p class="fs-6 fw-medium mt-5" style="color: #238593">STEP<br><span
                                class="fs-3 fw-semibold">03</span></p>
                        <img src="{{ asset('/image/Ellipse 42.svg') }}" class="img-fluid"
                            style="-webkit-transform: scaleX(1); transform: scaleX(1); max-width: 200px; width: 100%">
                        <p class="fs-2 mt-4" style="color: #535354">Meeting Creative</p>
                        <p class="mt-2" style="#535354">The world is a dangerous place to live; not because of the people
                            who are
                            evil,
                            but because of the people who don't do anything about it.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row d-lg-none text-center justify-content-center mb-3">
                        <p class="fs-6 fw-medium mt-5" style="color: #238593">STEP<br><span
                                class="fs-3 fw-semibold">04</span></p>
                        <img src="{{ asset('/image/Ellipse 43.svg') }}" class="img-fluid"
                            style="-webkit-transform: scaleX(-1); transform: scaleX(-1); max-width: 200px; width: 100%">
                        <p class="fs-2 mt-4" style="color: #535354">ตอนนี้เรา ?</p>
                        <p class="mt-2" style="#535354">The world is a dangerous place to live; not because of the
                            people
                            who are
                            evil,
                            but because of the people who don't do anything about it.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        {{-- End Mobile Timeline --}}
    </div>
    <div class="bg-img2" style="display:flex; align-items: center;">
        <div class="container">
            <div class="row text-center">
                <p class="display-5 fw-semibold"
                    style="background-image: linear-gradient(to right, #31B0C2, #ECD400); -webkit-background-clip: text; background-clip: text; color: transparent; line-height: unset;">
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
                        <img src="{{ str_replace(public_path(), '', $path) }}"
                            class="img-fluid rounded mx-auto d-block imgbw" width="300">
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endsection
