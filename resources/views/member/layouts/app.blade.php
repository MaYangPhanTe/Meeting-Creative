<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meeting Creative</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://kit.fontawesome.com/9acc73a385.js" crossorigin="anonymous"></script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        .swiper-grid-column>.swiper-wrapper {
            flex-direction: unset !important;
        }
    </style>
</head>

<body>
    @include('member.layouts.navbar')
    @include('member.layouts.footer')

    @yield('contents')

    @yield('footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            grid: {
                rows: 2,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerGroup: 3,
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                // when window width is >= 480px
                480: {
                    slidesPerGroup: 4,
                    slidesPerView: 4,
                    spaceBetween: 0,
                },
                // when window width is >= 640px
                640: {
                    slidesPerGroup: 5,
                    slidesPerView: 5,
                    spaceBetween: 0,
                }
            },
        });

        var swiper = new Swiper(".swiperTimeline", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>

</html>
