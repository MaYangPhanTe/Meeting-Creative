@extends('member.layouts.app')

@section('contents')
    <div style="background-image: linear-gradient(#EBEDF1, #FFFFFF); height: 600px; display:flex; align-items: center;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col">
                    <h1 class="display-1 fw-semibold hDigi"
                        style="background-image: linear-gradient(to right, #238795, #ECD400); -webkit-background-clip: text; background-clip: text; color: transparent; line-height: unset;">
                        Digital Production</h1>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col">
                    <p class="fs-5">Meeting Creative คือ บริษัทรับออกแบบเว็บไซต์ กราฟฟิก เน็ตเวิร์ค
                        รวมถึงบริการด้านการตลาดออนไลน์</p>
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
    <div style="background-color: #252525;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg mt-5 mb-xl-2 text-center align-self-center">
                    <img src="{{ asset('/image/web_development_7 1.svg') }}" style="max-width: 740px; width: 100%;">
                </div>
                <div class="col mt-4 mt-sm-2 mt-md-5 mb-4 mb-md-5 title-design align-self-xl-center">
                    <div class="row text-lg-end">
                        <div class="row">
                            <p class="display-1 fw-semibold"
                                style="background-image: linear-gradient(to right, #36D7EE, #ECD400); -webkit-background-clip: text; background-clip: text; color: transparent; line-height: unset;">
                                Web Design</p>
                        </div>
                        <div class="row">
                            <p class="text-white fs-5">รับออกแบบเว็บไซต์ ดีไซน์เว็บ ทำเว็บ Web Development ด้วยมาตรฐานสากล
                                รองรับการแสดงทั้งบนมือถือ และ Desktop พร้อมให้บริการทั้งในรูปแบบเว็บส่วนตัว (Web Blog)
                                เว็บร้านค้า SME เว็บองค์กร บริษัท (Corporate) ห้างร้าน รวมไปถึง E-Commerce</p>
                        </div>
                        <div class="row justify-content-center justify-content-xl-end text-center">
                            <div class="col-6 col-sm-4 col-lg-5 col-xl-4 mt-3">
                                <button type="button" class="btn quotation">ขอใบเสนอราคา</button>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-5 col-xl-4 mt-3">
                                <button type="button" class="btn learnmore">เรียนรู้เพิ่มเติม</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-img">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl mt-5 mb-xl-2 text-center">
                    <img src="{{ asset('/image/4758498 1.svg') }}" style="max-width: 740px; width: 100%;">
                </div>
                <div class="col mt-4 mt-sm-2 mt-md-5 mb-4 mb-sm-2 mb-md-5 title-design align-self-center">
                    <div class="row">
                        <p class="display-1 fw-semibold"
                            style="background-image: linear-gradient(to right, #238795, #ECD400); -webkit-background-clip: text; background-clip: text; color: transparent; line-height: unset;">
                            Design Graphic
                        </p>
                    </div>
                    <div class="row">
                        <p class="fs-5">
                            บริการกราฟิกดีไซน์ รับออกแบบโลโก้ แบนเนอร์ โปสเตอร์ ปกหนังสือ สื่อสิ่งพิมพ์ต่างๆ
                            รวมไปถึงงานออกแบบออนไลน์หน้าปก Social Media ตลอดจนการวาง Branding Corporate
                            Identityให้กับธุรกิจของคุณ
                        </p>
                    </div>
                    <div class="row justify-content-center justify-content-xl-start text-center">
                        <div class="col-5 col-sm-4 mt-3">
                            <button type="button" class="btn quotation">ขอใบเสนอราคา</button>
                        </div>
                        <div class="col-5 col-sm-4 mt-3">
                            <button type="button" class="btn learnmore">เรียนรู้เพิ่มเติม</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #252525;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl mt-5 mb-xl-2 text-center">
                    <img src="{{ asset('/image/google_ad_3d 4.svg') }}" style="max-width: 740px; width: 100%;">
                </div>
                <div class="col mt-4 mt-sm-2 mt-xl-5 mb-4 mb-sm-4 mb-md-5 title-design align-self-xl-center text-xl-end">
                    <div class="row">
                        <p class="display-1 fw-semibold"
                            style="background-image: linear-gradient(to right, #31B0C2, #ECD400); -webkit-background-clip: text; background-clip: text; color: transparent; line-height: unset;">
                            Google &<br>
                            Facebook Ads
                        </p>
                    </div>
                    <div class="row">
                        <p class="text-white fs-5">ดูแล และบริหารแคมเปญโดยผู้เชี่ยวชาญตัวจริง<br>
                            เป้าหมายของเราไม่ใช่แค่จำนวนคลิก แต่เป็นการเพิ่มยอดขายให้ธุรกิจคุณ</p>
                    </div>
                    <div class="row justify-content-center justify-content-xl-end text-center">
                        <div class="col-5 col-sm-4 col-lg-3 col-xl-4 mt-3">
                            <button type="button" class="btn quotation">ขอใบเสนอราคา</button>
                        </div>
                        <div class="col-5 col-sm-4 col-lg-3 col-xl-4 mt-3">
                            <button type="button" class="btn learnmore">เรียนรู้เพิ่มเติม</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #F5F5F7;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl mt-5 mb-4 mb-xl-2 text-center align-self-xl-center">
                    <img src="{{ asset('/image/Group 61.svg') }}" style="max-width: 740px; width: 80%;">
                </div>
                <div class="col mt-4 mt-sm-2 mt-md-5 mb-4 mb-sm-2 mb-md-5 title-design align-self-center">
                    <div class="row">
                        <p class="display-1 fw-semibold"
                            style="background-image: linear-gradient(to right, #238795, #ECD400); -webkit-background-clip: text; background-clip: text; color: transparent; line-height: unset;">
                            Network Service
                        </p>
                    </div>
                    <div class="row">
                        <p class="fs-5">
                            รับดูแลและออกแบบระบบเน็ตเวิร์ค ให้คำปรีกษาการเชื่อมต่อระบบเน็ตเวิร์คให้ใช้งานได้เสถียร
                            และครอบคลุมทั้งสำนักงาน ตลอดจนการเดินสายแลน เดินระบบกล้องวงจรปิด
                            โดยบุคลากรที่เชี่ยวชาญด้านเทคนิค แก้ไขปัญหาได้อย่างตรงจุด รับประกันงานติดตั้ง 1 ปีเต็ม
                        </p>
                    </div>
                    <div class="row justify-content-center justify-content-xl-start text-center">
                        <div class="col-5 col-sm-4 mt-3">
                            <button type="button" class="btn quotation">ขอใบเสนอราคา</button>
                        </div>
                        <div class="col-5 col-sm-4 mt-3">
                            <button type="button" class="btn learnmore">เรียนรู้เพิ่มเติม</button>
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
                        <img src="{{ str_replace(public_path(), '', $path) }}" class="img-fluid rounded mx-auto d-block imgbw"
                            width="300">
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endsection
