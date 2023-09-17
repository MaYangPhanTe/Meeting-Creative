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
                        Network
                    </p>
                </div>
                <div class="row text-xl-end">
                    <p class="fs-5">
                        บริการรับติดตั้ง ระบบ Internet ภายในองค์กร สำนักงาน หอพัก โรงแรม โรงงาน บ้านพัก ส่วนราชการ
                        ดำเนินการติดตั้งครบวงจร ทั้งการเดินสายภายใน (LAN) การเชื่อมต่อระบบไร้สาย (WiFi) การตั้งค่าเครื่อง
                        Server รวมไปถึงบริการเดินสาย ตั้งค่าระบบคู่สายโทรศัพท์ ทั้งสำหรับติดต่อภายใน ทีมงานมืออาชีพ
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
                            <li class="bullet">เดินสายแลน</li>
                            <li class="bullet">ติดตั้งกล้องวงจรปิด</li>
                            <li class="bullet">IT Support</li>
                            <li class="bullet">รับทำระบบ Server / Nas / Load Balance VPN</li>
                            <li class="bullet">รับทำระบบ Load Balance VPN</li>
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
    <div style="background-color: #252525">
        <div class="container">
            <div class="row pt-5">
                <p class="text-white text-center fs-5">ผลงานจากทีม Support</p>
            </div>
            <div class="row">
                <p class="text-white text-center fs-3">Our Works : Network</p>
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
