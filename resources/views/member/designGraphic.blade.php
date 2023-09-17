@extends('member.layouts.app')

@section('contents')
    <div style="background-color: #F1F2F5; height: 650px;">
        <div class="row" style="margin-right: 0">
            <div class="col-12 col-xl text-center text-xl-start mt-5">
                <img src="{{ asset('/image/348 1.svg') }}" style="max-width: 740px; width: 100%;" class="img-design">
            </div>
            <div class="col mt-4 mt-sm-2 mt-md-5 mb-4 mb-sm-2 mb-md-5 mx-4 mx-xl-0 me-xl-5 title-design align-self-center">
                <div class="row text-xl-end">
                    <p class="display-1 fw-semibold"
                        style="background: linear-gradient(90deg, #238795 28.13%, #ECD400 100%);
                        background-clip: text;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        line-height: unset;">
                        Design Graphic
                    </p>
                </div>
                <div class="row text-xl-end">
                    <p class="fs-5">
                        บริการกราฟิคดีไซน์ รับออกแบบโลโก้ แบนเนอร์ โปสเตอร์ ปกหนังสือ สื่อสิ่งพิมพ์ต่างๆ
                        รวมไปถึงงานออกแบบออนไลน์ หน้าปก Social Media ตลอดจนการวาง Branding Corporate Identity
                        ให้กับธุรกิจของคุณ
                    </p>
                </div>
                <div class="row justify-content-center justify-content-xl-end text-center text-xl-end">
                    <div class="col-6 col-sm-4 mt-3">
                        <button type="button" class="btn quotation">ทำใบเสนอราคา</button>
                    </div>
                    <div class="col-6 col-sm-4 mt-3">
                        <button type="button" class="btn learnmore">เรียนรู้เพิ่มเติม</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #FFFFFF">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="row text-center">
                    <p>OUR SERVICES</p>
                </div>
                <div class="row text-center">
                    <p class="fs-5">รับทํากราฟิคดีไซน์รับงานออกแบบ สื่อต่างๆ</p>
                </div>
                <div class="row text-center">
                    <p class="fs-5">ด้วยประสบการณ์การออกแบบกราฟิกของเรา ผ่านงานออกแบนเนอร์ Banner ออกแบบสื่อสิ่งพิมพ์
                        ออกแบบป้ายโฆษณา ออกแบบโลโก้ Branding โดยการสร้างความหมายและสื่อสารให้ตรงจุด
                        พร้อมการออกแบบที่หลากหลายและมีเอกลักษณ์เฉพาะตัว ให้เหมาะสมกับธุรกิจ สินค้าและบริการของคุณ
                        เราพร้อมให้คำปรึกษาและแนะนำ</p>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <ul class="fs-5">
                            <li class="bullet">รับออกแบบสื่อออนไลน์</li>
                            <li class="bullet">รับออกแบบสื่อสิ่งพิมพ์</li>
                            <li class="bullet">ออกแบบโลโก้ Branding</li>
                            <li class="bullet">รับถ่ายภาพตัดต่อวีดีโอ</li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-6 col-sm-4 col-xl-2 mt-3">
                        <button type="button" class="btn quotation">ทำใบเสนอราคา</button>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mt-3">
                        <button type="button" class="btn learnmore">เรียนรู้เพิ่มเติม</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background: #252525;">
        <div class="container">
            <div class="row pt-5">
                <p class="text-white text-center fs-5">ผลงานออกแบบเว็บไซต์</p>
            </div>
            <div class="row">
                <p class="text-white text-center fs-3">Our Works : Web Design</p>
            </div>
            <div class="row justify-content-center text-center mt-3">
                <ul class="nav nav-pills justify-content-around row-cols-5 align-items-center mb-3 mb-xl-5">
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="{{ url('#') }}">ALL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('#') }}">Info Graphic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('#') }}">Logo Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('#') }}">Ads Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('#') }}">More</a>
                    </li>
                </ul>
                <div class="w-100"></div>
                @for ($i = 0; $i < 9; $i++)
                    @if ($i < 6)
                        <div class="col-4 mb-3 mb-lg-4">
                            <img src="{{ asset('/image/Group 70.svg') }}" alt=""
                                style="max-width: 300px; width: 100%;">
                        </div>
                    @else
                        <div class="collapse col-4 mb-3 mb-lg-4" id="test">
                            <img src="{{ asset('/image/Group 70.svg') }}" alt=""
                                style="max-width: 300px; width: 100%;">
                        </div>
                    @endif
                @endfor
            </div>
            <div class="row mb-5 mt-3">
                <div class="col text-center mb-3">
                    <a class="icon-link link-underline link-underline-opacity-0 text-white fs-5" data-bs-toggle="collapse"
                        href="#test" role="button" aria-expanded="false" aria-controls="test">
                        <i class="fa-solid fa-chevron-down fa-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div style="background: url('{{ asset('/image/5184379 1.svg') }}'), white 50% / cover no-repeat;">
        <div class="container">
            <div class="row">
                <div class="row pt-5">
                    <div class="col">
                        <div class="row mb-5">
                            <p class="text-center text-xl-start">WHY CHOOSE US</p>
                        </div>
                        <div class="row">
                            <p class="fs-4 text-center text-xl-start mb-5">ทำไมต้องเลือกเรา ?</p>
                        </div>
                        <div class="row row-cols-1 gy-5 justify-content-center">
                            <div class="col">
                                <div class="card mb-3 border border-0 ms-3">
                                    <div class="row g-0">
                                        <div class="col-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                                viewBox="0 0 46 46" fill="none">
                                                <circle cx="23" cy="23" r="23"
                                                    fill="url(#paint0_linear_1_1985)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1_1985" x1="46"
                                                        y1="23" x2="0" y2="23"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#7E66DE" />
                                                        <stop offset="1" stop-color="#7E66DE" stop-opacity="0.5" />
                                                    </linearGradient>
                                                </defs>
                                                <image href="{{ asset('/image/logo.svg') }}" width="34"
                                                    height="34" x="6" y="6">
                                            </svg>
                                        </div>
                                        <div class="col">
                                            <div class="card-body ps-3 p-0">
                                                <p class="card-title" style="color: #016672">Unique Design</p>
                                                <p class="card-text text-secondary">
                                                    ทุกชิ้นงานผ่านกระบวนการคิด การสร้างสรรค์ ที่เป็นเอกลักษณ์
                                                    พร้อมเติมแต่งอย่างสวยงาม
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3 mb-xl-3 border border-0  ms-3">
                                    <div class="row g-0">
                                        <div class="col-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                                viewBox="0 0 46 46" fill="none">
                                                <circle cx="23" cy="23" r="23"
                                                    fill="url(#paint0_linear_1_1988)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1_1988" x1="46"
                                                        y1="23" x2="0" y2="23"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#DA7211" />
                                                        <stop offset="1" stop-color="#DA7211" stop-opacity="0.5" />
                                                    </linearGradient>
                                                </defs>
                                                <image href="{{ asset('/image/logo.svg') }}" width="34"
                                                    height="34" x="6" y="6">
                                            </svg>
                                        </div>
                                        <div class="col">
                                            <div class="card-body ps-3 p-0">
                                                <p class="card-title" style="color: #016672">Designer</p>
                                                <p class="card-text text-secondary">
                                                    ออกแบบโดยนักออกแบบมืออาชีพ เพราะเรารักและตั้งใจ
                                                    ในงานออกแบบ จึงมั่นใจได้ว่าผลงานทุกชิ้นที่ออกมามีคุณภาพ
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3 border border-0 ms-3">
                                    <div class="row g-0">
                                        <div class="col-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                                viewBox="0 0 46 46" fill="none">
                                                <circle cx="23" cy="23" r="23"
                                                    fill="url(#paint0_linear_1_1991)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1_1991" x1="46"
                                                        y1="23" x2="0" y2="23"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#00C5E0" />
                                                        <stop offset="1" stop-color="#00C5E0" stop-opacity="0.5" />
                                                    </linearGradient>
                                                </defs>
                                                <image href="{{ asset('/image/logo.svg') }}" width="34"
                                                    height="34" x="6" y="6">
                                            </svg>
                                        </div>
                                        <div class="col">
                                            <div class="card-body ps-3 p-0">
                                                <p class="card-title" style="color: #016672">Support after sale services
                                                </p>
                                                <p class="card-text text-secondary">
                                                    บริการหลังการขาย พร้อมให้คำแนะนำ ปรึกษา ให้เราเป็นส่วนหนึ่ง
                                                    ในการสร้างแบรนด์ของท่านให้โดดเด่นและยั่งยืนไปด้วยกัน
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="row justify-content-center justify-content-xl-end">
                            <img src="{{ asset('/image/ONZ74Q1 1.svg') }}" alt=""
                                style="max-width: 500px; width: 100%;" class="mb-3">
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
                    Get a quote for your project
                </p>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-5 col-sm-4 mt-3 mb-3">
                    <button type="button" class="btn quotation">เรียนรู้เพิ่มเติม</button>
                </div>
            </div>
        </div>
    </div>
@endsection
