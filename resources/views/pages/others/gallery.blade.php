@extends('layout.app')

@section('title', 'Galería - Iespp José Faustino Sánchez Carrión Huamachuco')

@section('content')
    <x-hero image="{{ asset('images/gallery/gallery_hero.jpg') }}" text="Galería Institucional" />

    <section class="render py-16">
        <h2 class="title text-center">Educación Inicial</h2>
        <div class="h-[300px] mt-6">
            <div class="swiper myGallery">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/inicial/inicial1.webp') }}" alt="Idiomas Inglés">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/inicial/iniical2.webp') }}" alt="Idiomas Inglés">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/inicial/inicial3.webp') }}" alt="Idiomas Inglés">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/inicial/inicial4.jpg') }}" alt="Idiomas Inglés">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/inicial/inicial5.jpg') }}" alt="Idiomas Inglés">
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
                        <img src="{{ asset('images/home/carreras/ingles/ingles1.webp') }}" alt="Idiomas Inglés">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/ingles/ingles2.webp') }}" alt="Idiomas Inglés">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/ingles/ingles3.webp') }}" alt="Idiomas Inglés">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/ingles/ingles4.webp') }}" alt="Idiomas Inglés">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/ingles/ingles5.webp') }}" alt="Idiomas Inglés">
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
                        <img src="{{ asset('images/home/carreras/comunicacion/comunicacion1.webp') }}"
                            alt="Especialidad Comunicación">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/comunicacion/comunicacion2.webp') }}"
                            alt="Especialidad Comunicación">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/comunicacion/comunicacion3.webp') }}"
                            alt="Especialidad Comunicación">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/comunicacion/comunicacion4.webp') }}"
                            alt="Especialidad Comunicación">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/home/carreras/comunicacion/comunicacion1.webp') }}"
                            alt="Especialidad Comunicación">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection
