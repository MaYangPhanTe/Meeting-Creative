@extends('member.layouts.app')

@section('contents')
    <div style="background-color: #F1F2F5; height: 650px;">
        <div class="row" style="margin-right: 0">
            <div class="col mt-5 mb-4 mb-sm-2 mb-md-5 mx-4 mx-xl-0 me-xl-5 title-design align-self-center">
                <div class="row text-xl-start ms-xl-5">
                    <p class="display-1 fw-semibold"
                        style="background: linear-gradient(90deg, #238795 32.81%, #ECD400 100%);
                        background-clip: text;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        line-height: unset;">
                        Digital Marketing
                    </p>
                </div>
                <div class="row text-xl-start ms-xl-5">
                    <p class="fs-5">
                        บริการการตลาดออนไลน์ ด้วยประสบการณ์อย่างยาวนาน ในการวางแผน และการให้คำแนะนำเกี่ยวกับสายงานดิจิตอล
                        ทำให้คุณมั่นใจได้ว่า เราจะช่วยพัฒนา และประสบความสำเร็จทางธุรกิจออนไลน์ไปพร้อมกับคุณ
                    </p>
                </div>
                <div class="row justify-content-center justify-content-xl-start text-center text-xl-start ms-xl-5">
                    <div class="col-6 col-sm-4 mt-3">
                        <button type="button" class="btn quotation">ทำใบเสนอราคา</button>
                    </div>
                    <div class="col-6 col-sm-4 mt-3">
                        <button type="button" class="btn learnmore">เรียนรู้เพิ่มเติม</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl text-center text-xl-end mt-3">
                <img src="{{ asset('/image/PSD_07 1.svg') }}" style="max-width: 740px; width: 100%;" class="img-design">
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
                    <p class="fs-5">Google Ads <span style="color: #238795">And</span> Facebook Ads</p>
                </div>
                <div class="row text-center mx-auto">
                    <p class="fs-5 px-3">สร้างโฆษณาออนไลน์ ไม่ว่าจะเป็น Facebook Ads, Google Adwords, Tiktok Ads, Line Ads
                        การแสดงโฆษณาใน Platform ออนไลน์ต่างๆ ที่ช่วยเพิ่มผลกำไรให้กับธุรกิจของคุณ
                        เราช่วยทำให้คุณเข้าถึงกลุ่มเป้าหมาย และสร้างแบรนด์ให้เป็นที่รู้จัก โดยการใช้เครื่องมือ(Tools)
                        ที่เหมาะสมกับธุรกิจออนไลน์ของคุณ พร้อมโฆษณาเจาะไปยังเฉพาะกลุ่มและเฉพาะความสนใจได้
                        วัดผลและเพิ่มยอดขายได้อย่างแท้จริง</p>
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
    <div style="background-color: #252525">
        <div class="container">
            <div class="row pt-5">
                <p class="text-white text-center fs-5">ผลงานการสร้างโฆษณาออนไลน์</p>
            </div>
            <div class="row">
                <p class="text-white text-center fs-3">Our Works : Digital Marketing</p>
            </div>
            <div class="row justify-content-center text-center mt-3">
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
    <div style="background-color: #fff">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="row text-center">
                    <p class="fs-6">กระบวนการเริ่มต้นการทำงานกับเรา</p>
                </div>
                <div class="row text-center">
                    <p class="fs-4" style="color: #238593">Steps to Build a Successful
                        Digital Marketing with Us</p>
                </div>
                <div class="row mx-auto">
                    @include('member.layouts.svgEdit')
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
