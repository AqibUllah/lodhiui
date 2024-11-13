@extends('layouts.app')
@push('styles')
    @vite(['resources/css/pages/home.scss'])
    @vite('resources/css/components/tabs.scss')
@endpush
@section('content')
    <div class="container-fluid">

        <section class="section-beginning">
            <div class="container p-5">
                <div class="row items-center">
                    <div class="col-md-7 col-ms-12 col-xs-12">
                        <h1 class="title">Unlock the Power of Modern Web
                            Design</h1>
                        <h4 class="sub-title">Expert Designs in<br> Leading Web
                            Technologies</h4>
                        <p class="paragraph">At LodhiUI, we specialize in
                            creating stunning and functional web
                            designs using the latest and
                            most powerful technologies. Our expertise spans across a variety of platforms to
                            ensure
                            your
                            website is not only visually appealing but also robust and efficient.</p>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <img src="{{ asset('assets/images/templates/iSocial.png') }}" class="template-1" width="100%"
                             height="100%" alt="Social Template">
                    </div>
                </div>
            </div>
        </section>
        <section class="section-tabs">
            <div class="tabs">
                <div class="tabs__tab tabs__tab--active" data-tab="tab1">Tab 1</div>
                <div class="tabs__tab" data-tab="tab2">Tab 2</div>
                <div class="tabs__tab" data-tab="tab3">Tab 3</div>
            </div>

            <div class="tab-content" id="tab1">
                <p>Content for Tab 1</p>
            </div>
            <div class="tab-content" id="tab2" style="display: none;">
                <p>Content for Tab 2</p>
            </div>
            <div class="tab-content" id="tab3" style="display: none;">
                <p>Content for Tab 3</p>
            </div>
        </section>
    </div>


    {{--    <section>--}}
    {{--        <div class="row perform-we-excel-in">--}}
    {{--            <div class="col-md-6">--}}
    {{--                <h1 class="title" data-swiper-parallax="-300">Platforms We Excel In:</h1>--}}
    {{--                <ul data-swiper-parallax="-200">--}}
    {{--                    <li data-swiper-parallax="-100">--}}
    {{--                        <span class="font-bold">Laravel:</span><br>--}}
    {{--                        <span class="paragraph">Build dynamic, secure, and scalable web applications--}}
    {{--                                with elegant PHP--}}
    {{--                                frameworks.</span><br>--}}
    {{--                    </li>--}}
    {{--                    <li class="paragraph" data-swiper-parallax="-100">--}}
    {{--                        <span class="font-bold">Vue.js:</span><br>--}}
    {{--                        <span class="paragraph">Develop reactive and efficient front-end interfaces--}}
    {{--                                with ease.</span><br>--}}
    {{--                    </li>--}}
    {{--                    <li class="paragraph" data-swiper-parallax="-100">--}}
    {{--                        <span class="font-bold">Angular:</span><br>--}}
    {{--                        <span class="paragraph">Create sophisticated and feature-rich single-page--}}
    {{--                                applications.</span><br>--}}
    {{--                    </li>--}}
    {{--                    <li class="paragraph" data-swiper-parallax="-100">--}}
    {{--                        <span class="font-bold">Bootstrap:</span><br>--}}
    {{--                        <span class="paragraph">Design responsive and mobile-first projects--}}
    {{--                                quickly.</span><br>--}}
    {{--                    </li>--}}
    {{--                    <li class="paragraph" data-swiper-parallax="-100">--}}
    {{--                        <span class="font-bold">TailwindCSS:</span><br>--}}
    {{--                        <span class="paragraph">Utilize utility-first CSS framework to rapidly create--}}
    {{--                                custom designs.</span><br>--}}
    {{--                    </li>--}}
    {{--                    <li class="paragraph" data-swiper-parallax="-100">--}}
    {{--                        <span class="font-bold">Sass:</span><br>--}}
    {{--                        <span class="paragraph">Write maintainable and reusable stylesheets with the--}}
    {{--                                power of Sass.</span>--}}
    {{--                    </li>--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-6 text-center w-100">--}}
    {{--                <img src="{{ asset('assets/images/languages.gif') }}" class="languages" width="100%"--}}
    {{--                     height="100%" alt="supported languages">--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

@endsection

@push('styles')
    <style>
        /* Additional styles for this page */
    </style>
@endpush

@push('scripts')
    @vite('resources/assets/js/home.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
        // Wrap every letter in a span
        var title = document.querySelector('.title');
        title.innerHTML = title.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
            .add({
                targets: '.title .letter',
                scale: [4, 1],
                opacity: [0, 1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 950,
                delay: (el, i) => 70 * i
            }).add({
            targets: '.title',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
    </script>
@endpush
