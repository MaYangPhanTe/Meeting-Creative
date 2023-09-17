@extends('member.layouts.app')

@section('contents')
    <div style="background: #F1F2F5; height: 600px; display:flex; align-items: center;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7">
                    <h1 class="display-1 fw-semibold"
                        style="background: linear-gradient(90deg, #238795 26.56%, #ECD400 100%);
                        background-clip: text;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        line-height: unset;">
                        Our Work</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-xl-8">
                    <p class="fs-5 text-center">บริการรับติดตั้ง ระบบ Internet ภายในองค์กร สำนักงาน หอพัก โรงแรม โรงงาน
                        บ้านพัก
                        ส่วนราชการ ดำเนินการติดตั้งครบวงจร ทั้งการเดินสายภายใน (LAN) การเชื่อมต่อระบบไร้สาย (WiFi)
                        การตั้งค่าเครื่อง Server รวมไปถึงบริการเดินสาย ตั้งค่าระบบคู่สายโทรศัพท์ ทั้งสำหรับติดต่อภายใน
                        ทีมงานมืออาชีพ</p>
                </div>
            </div>
            <div class="row justify-content-center text-center mt-3">
                <div class="col-5 col-sm-4 col-lg-2">
                    <button type="button" class="btn quotation">ทำใบเสนอราคา</button>
                </div>
                <div class="col-5 col-sm-4 col-lg-2">
                    <button type="button" class="btn learnmore">เรียนรู้เพิ่มเติม</button>
                </div>
            </div>
        </div>
    </div>
    <div style="background: #FFF;">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 gy-4 justify-content-center mb-4">
                <div class="col">
                    <div class="card h-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 194 194"
                            fill="none" class="card-img-top mt-3">
                            <circle cx="97" cy="97" r="97" fill="#252525" />
                            <image href="{{ asset('/image/website-codes 1.svg') }}" width="122" height="122"
                                x="36" y="36">
                        </svg>
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: #238593">WEB DESIGN SERVICES</h5>
                            <p class="card-text">รับออกแบบเว็บไซต์ (Web Design) ดีไซน์เว็บ และพัฒนาเว็บไซต์ ด้วย WordPress
                                หรือ เว็บร้านค้า E-Commerce เพื่อภาพลักษณ์ทางธุรกิจที่สื่อออกไปให้สวยงาม ทันสมัย
                                สร้างความน่าเชื่อถือ คำนึงถึงวัตถุประสงค์ของลักษณะทางธุรกิจ
                                และเน้นคุณภาพในรูปแบบที่ใช้งานง่าย ด้วยการบริการและความตั้งใจที่ดีของเรา</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 194 194"
                            fill="none" class="card-img-top mt-3">
                            <circle cx="97" cy="97" r="97" fill="#252525" />
                            <image href="{{ asset('/image/website-codes 2.svg') }}" width="122" height="122"
                                x="36" y="36">
                        </svg>
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: #238593">Design Graphic SERVICES</h5>
                            <p class="card-text">รับทำการตลาดออนไลน์ วางแผนคิดกลยุทธ์โปรโมทธุรกิจหรือสินค้าของคุณ และวางแผน
                                Strategy ออนไลน์ต่างๆให้กับองค์กรที่สนใจทุกชนิด เช่น Social Media, Online Ads, Facebook Ads,
                                Google Ads, SEO, Influencer และ Integrate Marketing ต่างๆ พร้อมคอร์สสำหรับการสอน Digital
                                Marketing เพื่อธุรกิจและองค์กรของคุณ</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 194 194"
                            fill="none" class="card-img-top mt-3">
                            <circle cx="97" cy="97" r="97" fill="#252525" />
                            <image href="{{ asset('/image/website-codes 3.svg') }}" width="122" height="122"
                                x="36" y="36">
                        </svg>
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: #238593">Digital Marketing Services</h5>
                            <p class="card-text">บริการออกแบบงานกราฟฟิกต่างๆ เช่น Branding สื่อสิ่งพิมพ์ โลโก้ นามบัตร
                                แผ่นพับ บรรจุภัณฑ์, บริการถ่ายรูป ภาพนิ่ง สถานที่ โรงแรม โรงงาน และรับทำสื่อวีดีโอ Video
                                Production งานนำเสนอในรูปแบบที่แตกต่าง ทันสมัย พร้อมสร้างสรรค์ผลงาน เริ่มตั้งแต่การวาง
                                Concept และเลือกรูปแบบของงานตามความต้องการ</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 194 194"
                            fill="none" class="card-img-top mt-3">
                            <circle cx="97" cy="97" r="97" fill="#252525" />
                            <image href="{{ asset('/image/website-codes 4.svg') }}" width="122" height="122"
                                x="36" y="36">
                        </svg>
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: #238593">Network SERVICES</h5>
                            <p class="card-text">บริการรับติดตั้ง ระบบ Internet ภายในองค์กร สำนักงาน หอพัก โรงแรม โรงงาน
                                บ้านพัก ส่วนราชการ ดำเนินการติดตั้งครบวงจร ทั้งการเดินสายภายใน (LAN) การเชื่อมต่อระบบไร้สาย
                                (WiFi) การตั้งค่าเครื่อง Server รวมไปถึงบริการเดินสาย ตั้งค่าระบบคู่สายโทรศัพท์
                                ทั้งสำหรับติดต่อภายใน ทีมงานมืออาชีพ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #252525">
        <div class="container">
            <div class="row pt-5">
                <p class="text-white text-center fs-5">ผลงานออกแบบเว็บไซต์</p>
            </div>
            <div class="row">
                <p class="text-white text-center fs-3">Our Works : Web Design</p>
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
            <div class="row mt-3">
                <div class="col text-center mb-3">
                    <a class="icon-link link-underline link-underline-opacity-0 text-white fs-5" data-bs-toggle="collapse"
                        href="#test" role="button" aria-expanded="false" aria-controls="test">
                        <i class="fa-solid fa-chevron-down fa-2xl"></i>
                    </a>
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
