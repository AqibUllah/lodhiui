@extends('layouts.app')
@push('styles')
    @vite(['resources/css/pages/home.scss'])
@endpush
@section('content')
    <section class="section-beginning">
        <img src="{{ asset('assets/images/bg2.png') }}" alt="Background Image" class="background-image">
        <div class="container p-5">

            <!-- Slider main container -->
            <x-card style="position: relative;">
                <div class="parallax-bg" style="
                  background-image: url('{{ asset('assets/images/bg1.gif') }}');
                " data-swiper-parallax="-23%"></div>
                <div class="home-swiper">

                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="row slide1">
                                <div class="col-md-6">
                                    <h1 class="title" data-swiper-parallax="-300">Unlock the Power of Modern Web
                                        Design</h1>
                                    <h4 class="sub-title" data-swiper-parallax="-200">Expert Designs in Leading Web
                                        Technologies</h4>
                                    <p class="paragraph" data-swiper-parallax="-100">At LodhiUI, we specialize in
                                        creating stunning and functional web
                                        designs using the latest and
                                        most powerful technologies. Our expertise spans across a variety of platforms to
                                        ensure
                                        your
                                        website is not only visually appealing but also robust and efficient.</p>
                                </div>
                                <div class="col-md-6 text-center w-100">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row perform-we-excel-in">
                                <div class="col-md-6">
                                    <h1 class="title" data-swiper-parallax="-300">Platforms We Excel In:</h1>
                                    <ul data-swiper-parallax="-200">
                                        <li data-swiper-parallax="-100">
                                            <span class="font-bold">Laravel:</span><br>
                                            <span class="paragraph">Build dynamic, secure, and scalable web applications
                                                with elegant PHP
                                                frameworks.</span><br>
                                        </li>
                                        <li class="paragraph" data-swiper-parallax="-100">
                                            <span class="font-bold">Vue.js:</span><br>
                                            <span class="paragraph">Develop reactive and efficient front-end interfaces
                                                with ease.</span><br>
                                        </li>
                                        <li class="paragraph" data-swiper-parallax="-100">
                                            <span class="font-bold">Angular:</span><br>
                                            <span class="paragraph">Create sophisticated and feature-rich single-page
                                                applications.</span><br>
                                        </li>
                                        <li class="paragraph" data-swiper-parallax="-100">
                                            <span class="font-bold">Bootstrap:</span><br>
                                            <span class="paragraph">Design responsive and mobile-first projects
                                                quickly.</span><br>
                                        </li>
                                        <li class="paragraph" data-swiper-parallax="-100">
                                            <span class="font-bold">TailwindCSS:</span><br>
                                            <span class="paragraph">Utilize utility-first CSS framework to rapidly create
                                                custom designs.</span><br>
                                        </li>
                                        <li class="paragraph" data-swiper-parallax="-100">
                                            <span class="font-bold">Sass:</span><br>
                                            <span class="paragraph">Write maintainable and reusable stylesheets with the
                                                power of Sass.</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 text-center w-100">
                                    <img src="{{ asset('assets/images/languages.gif') }}" class="languages" width="100%"
                                         height="100%" alt="supported languages">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need circle progress -->
                    <div class="autoplay-progress">
                        <svg viewBox="0 0 48 48">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                        <span></span>
                    </div>
                </div>
            </x-card>
        </div>
    </section>

@endsection

@push('styles')
    <style>
        /* Additional styles for this page */
    </style>
@endpush

@push('scripts')
    @vite('resources/assets/js/home.js')
@endpush
