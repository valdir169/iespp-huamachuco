@extends('layout.app')

@section('title', 'Galería - IESPP JFSC Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/gallery/computo.jpg') }}" text="Galería" />

    <section class="render py-16">
        <h2 class="title text-center">Educación Inicial</h2>
        <div class="h-[300px] mt-6">
            <div class="swiper myGallery">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="render py-4">
        <h2 class="title text-center">Idiomas: Especialidad Inglés</h2>
        <div class="h-[300px] mt-6">
            <div class="swiper myGallery">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="render py-16">
        <h2 class="title text-center">Educación Secundaria: Especialidad Comunicación</h2>
        <div class="h-[300px] mt-6">
            <div class="swiper myGallery">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection