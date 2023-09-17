@extends('member.layouts.app')

@section('contents')
    <div style="background-color: #F1F2F5; height: 600px;">
        <div class="container">
            <div class="row">
                <div class="col mt-4 mt-sm-2 mt-md-5 mb-4 mb-sm-2 mb-md-5 title-design align-self-center">
                    <div class="row">
                        <p class="display-1 fw-semibold"
                            style="background-image: linear-gradient(to right, #238795, #ECD400); -webkit-background-clip: text; background-clip: text; color: transparent; line-height: unset;">
                            Web Design
                        </p>
                    </div>
                    <div class="row">
                        <p class="fs-5">
                            รับออกแบบเว็บไซต์ ดีไซน์เว็บ ทำเว็บ Web Development ด้วยมาตรฐานสากล
                            รองรับการแสดงทั้งบนมือถือ และ Desktop พร้อมให้บริการทั้งในรูปแบบเว็บส่วนตัว
                            (Web Blog) เว็บร้านค้า SME เว็บองค์กร บริษัท(Corporate) ห้างร้าน รวมไปถึง E-Commerce
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
                <div class="col-12 col-xl text-center">
                    <img src="{{ asset('/image/337 1.svg') }}" style="max-width: 740px; width: 100%;" class="img-design">
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #FFFFFF">
        <div class="container">
            <div class="row mt-3 mb-5">
                <div class="row text-center">
                    <p>OUR SERVICES</p>
                </div>
                <div class="row text-center">
                    <p class="fs-5">WEB DESIGN SERVICES</p>
                </div>
                <div class="row text-center">
                    <p class="fs-5">รับทำเว็บไซต์ ออกแบบเว็บไซต์ ออกแบบดีไซน์เว็บ แบบครบวงจร ทั้งรูปแบบบุคคล ร้านค้า
                        ห้างร้าน บริษัท
                        องค์กร
                        และ SME</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-xl-6">
                        <ul class="fs-5">
                            <li>ให้บริการด้านการออกแบบเว็บด้วย PHP Laravel Framwork</li>
                            <li>รองรับทุกขนาดบนมือถือ Responsive Design</li>
                            <li>ระบบการออกแบบเว็บ พร้อมหลังบ้านที่คุณสามารถ Custom ได้เอง</li>
                            <li>งบประมาณที่เหมาะสม แต่คุณภาพดีเยี่ยม</li>
                            <li>บริการที่ดีเยี่ยม พร้อมให้คำปรึกษาในเรื่องการตลาดออนไลน์</li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-5 col-sm-4 col-xl-2 mt-3">
                        <button type="button" class="btn quotation">ขอใบเสนอราคา</button>
                    </div>
                    <div class="col-5 col-sm-4 col-xl-2 mt-3">
                        <button type="button" class="btn learnmore">เรียนรู้เพิ่มเติม</button>
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
            <div class="row text-center mt-3">
                @for ($i = 0; $i < 15; $i++)
                    @if ($i < 12)
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
                <div class="col text-center">
                    <a class="icon-link link-underline link-underline-opacity-0 text-white fs-5" data-bs-toggle="collapse"
                        href="#test" role="button" aria-expanded="false" aria-controls="test">
                        <i class="fa-solid fa-chevron-down fa-2xl mb-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #fff">
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 col-xl-6">
                    <div class="row">
                        <p class="text-black text-center text-xl-start">สิ่งที่เราให้ได้</p>
                    </div>
                    <div class="row">
                        <p class="text-black fs-4 text-center text-xl-start">What We Offer</p>
                    </div>
                    <div class="row justify-content-center justify-content-xl-start">
                        <img src="{{ asset('/image/10 1.svg') }}" alt="" style="max-width: 500px; width: 100%;"
                            class="mb-3">
                    </div>
                </div>
                <div class="col">
                    <div class="row row-cols-1 gy-1 justify-content-center">
                        <div class="col">
                            <div class="card mb-3 cardBox">
                                <div class="row g-0">
                                    <div class="col-md-4 text-center">
                                        <img src="{{ asset('/image/1 902.svg') }}" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <p class="card-title" style="color: #016672">CONSULTING</p>
                                            <p class="card-text text-secondary">
                                                การบริการที่พร้อมเป็นที่ปรึกษาที่ดีให้กับคุณ
                                                สนับสนุนธุรกิจของคุณตั้งแต่เริ่มต้น
                                                ตลอดจนลูกค้าไม่ว่าจะขนาดเล็ก หรือขนาดใหญ่
                                                เราทำให้ลูกค้าได้เติบโตอย่างต่อเนื่องและมั่นคง
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-3 mb-xl-3 ms-xl-5 cardBox">
                                <div class="row g-0">
                                    <div class="col-md-4 text-center">
                                        <img src="{{ asset('/image/1 903.svg') }}" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <p class="card-title" style="color: #016672">PRODUCTION</p>
                                            <p class="card-text text-secondary">
                                                ด้วยระบบจัดการเว็บไซต์ที่ใช้งานได้ง่าย ทำให้คุณสะดวกในการจัดทำเว็บ
                                                เพื่อ่อยอดต่อไปในอนาคต ระบบเว็บไซต์นี้จะตอบโจทย์ธุรกิจของคุณในแง่ต่างๆ
                                                รวมไปถึงการใช้งานที่ดีอีกด้วย
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-3 cardBox">
                                <div class="row g-0">
                                    <div class="col-md-4 text-center">
                                        <img src="{{ asset('/image/1 904.svg') }}" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <p class="card-title" style="color: #016672">UP TO DATE</p>
                                            <p class="card-text text-secondary">
                                                เราสร้างระบบเว็บไซต์ที่พร้อมอัพเดท สร้างเว็บให้เข้า
                                                กับยุคสมัย ตลอดจนการใส่ใจทุกรายละเอียดงาน คอยดูแลให้อย่างสม่ำเสมอ
                                            </p>
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
                    <button type="button" class="btn quotation">ติดต่อเรา</button>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="bg-img4" style="display:flex; align-items: center;">
        <div class="container">
            <div class="row text-center">
                <p class="display-5 fw-semibold"
                    style="background: linear-gradient(90deg, #238795 0%, #31B0C2 51.56%, #ECD400 100%);
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">
                    Get a quote for your project
                </p>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-5 col-sm-4 mt-3 mb-3">
                    <button type="button" class="btn quotation">เรียนรู้เพิ่มเติม</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
