@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.navbar')
    <style>
        .boxes:hover {
            box-shadow: 1px 5px 12px 2px rgba(232,120,120,0.75);
            -webkit-box-shadow: 1px 5px 12px 2px rgba(232,120,120,0.75);
            -moz-box-shadow: 1px 5px 12px 2px rgba(232,120,120,0.75);
        }
        * {box-sizing: border-box;}
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1200px;
            position: relative;
            margin: auto;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }
    </style>
    <div style="display: flex;align-items: center;justify-content:center;margin-top:130px;gap:10px;">
        <div style="display: flex;align-items: center;justify-content: center;;width: 1150px; height: 590px; overflow: hidden">
                <div class="slideshow-container" style="width: 100%">
                    <div class="mySlides fade" style="width: 1150px; height: 590px; overflow: hidden">
                        <div class="numbertext">1 / 6</div>
                        <img src="{{ asset('img/banner-1.jpeg') }}" width="1150" height="720" alt="Example Image" loading="lazy" >
                    </div>

                    <div class="mySlides fade" style="width: 1150px; height: 590px; overflow: hidden">
                        <div class="numbertext">2 / 6</div>
                        <img src="{{ asset('img/banner-2.jpeg') }}" width="1150" height="720" alt="Example Image" loading="lazy" >
                    </div>

                    <div class="mySlides fade" style="width: 1150px; height: 590px; overflow: hidden">
                        <div class="numbertext">3 / 6</div>
                        <img src="{{ asset('img/banner-3.jpeg') }}" width="1150" height="720" alt="Example Image" loading="lazy" >
                    </div>

                    <div class="mySlides fade" style="width: 1150px; height: 590px; overflow: hidden">
                        <div class="numbertext">4 / 6</div>
                        <img src="{{ asset('img/banner-4.jpeg') }}" width="1150" height="720" alt="Example Image" loading="lazy" >
                    </div>

                    <div class="mySlides fade" style="width: 1150px; height: 590px; overflow: hidden">
                        <div class="numbertext">5 / 6</div>
                        <img src="{{ asset('img/mainRight.webp') }}" width="1150" height="720" alt="Example Image" loading="lazy" >
                    </div>

                    <div class="mySlides fade" style="width: 1150px; height: 590px; overflow: hidden">
                        <div class="numbertext">6 / 6</div>
                        <img src="{{ asset('img/main-unhan.webp') }}" width="1150" height="720" alt="Example Image" loading="lazy" >
                    </div>

                </div>
        </div>
    </div>

    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <div style="display: flex;align-items: center;justify-content:center;margin-top:40px;gap:10px;padding: 20px">
        <div style="width: 80vw; display: flex;justify-content: center;flex-direction:column;align-items: center">
        <h3 style="font-weight: bold">SISMA</h3>
            <div style="width: 70vw;margin-top: 10px">
                <p style="font-size: 20px;text-align: center">
                    SISMA merupakan sistem informasi kerjasama, yang berfungsi sebagai pusat informasi, komunikasi,
                    dan proses pengusulan yang berkaitan dengan kerjasama baik itu kerjasama luar negeri maupun dalam negeri </p>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: center;padding: 30px;gap:20px">
        <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('informasi-kerjasama') }}">
        <div class="boxes" style="background-color:#990000; color:white !important;;width: 280px;min-height: 300px;display: flex; justify-content: center; flex-direction: column;align-items: center;text-align: center;padding: 10px;">
            <h5 style="color: white !important;">Kerjasama Dalam Negri</h5>
            <div style="margin: 10px; background-color: white;padding: 10px;">
                <img src="{{ asset('img/kerjasama-dalam-negri.jpg') }}" width="180" alt="Example Image">
            </div>
            <h6 style="color: white !important;">List data kerjasama dalam negri</h6><p>Di sini Anda dapat melihat daftar data dalam list tabel </p>
        </div>
        </a>
        <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('informasi-kerjasama-luar') }}">
        <div class="boxes"  style="background-color:#990000; color:white !important;;width: 280px;min-height: 300px;display: flex; justify-content: center; flex-direction: column;align-items: center;text-align: center;padding: 10px;">
            <h5 style="color: white !important;">Kerjasama Luar Negri</h5>
            <div style="margin: 10px; background-color: white;padding: 10px;">
                <img src="{{ asset('img/kerjasama-luar-negri.jpg') }}" width="180" alt="Example Image">
            </div>
            <h6 style="color: white !important;">List data kerjasama luar negri</h6><p>Di sini Anda dapat melihat daftar data dalam list tabel </p>
        </div>
        </a>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();
        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

    @include('layouts.footers.guest.footer')
@endsection
