@extends('layout.app')

@section('title', 'Contacto')

@section('content')
    <div class="-mt-[120px] h-[700px] w-full bg-cover bg-no-repeat bg-center  flex items-center justify-center flex-col text-center gap-4"
        style='background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8)),
        url({{ asset('images/contacto.png') }});'>
        <span class="text-white text-xl sm:text-2xl text-4xl uppercase mt-[200px] sm:mt-[0px]">Estamos aquí para
            ayudarte</span>
        <span class="text-white text-base  sm:text-xl px-8 px-72">Comuníquese con nosotros en cualquier momento y estaremos
            encantados
            de responder a sus preguntas.</span>
    </div>

    <section class="-mt-[150px] w-full pb-8 ">
        <article
            class="mx-2 sm:mx-6  lg:mx-32 xl:mx-48 bg-[#3477DB] flex flex-col md:flex-row gap-4 py-8 px-6 sm:px-16 md:px-4 lg:px-8 xl:px-16  xl:mx-60 2xl:gap-16">

            <div class="w-full">
                <span class="font-bold text-white text-2xl">Envía tu mensaje</span>
                <form method="post" action="{{ route('contacto.process') }}">
                    @csrf
                    <div class="group">
                        <input type="text" name="name" placeholder=" " style="border-color:#fff;color:#fff;">
                        <label>Ingresa tus nombres</label>
                        @error('name')
                            <span>{{ 'message' }}</span>
                        @enderror
                    </div>

                    <div class="group" id="email">
                        <input type="text" name="email" id="" placeholder=" "
                            style="border-color:#fff;color:#fff;">
                        <label>Ingresa tu correo electrónico</label>
                        @error('email')
                            <span>{{ 'message' }}</span>
                        @enderror
                    </div>

                    <div class="group" id="email">
                        <input type="text" name="cellphone" placeholder=" " style="border-color:#fff;color:#fff;">
                        <label>Ingresa tu número de celular</label>
                        @error('cellphone')
                            <span>{{ 'message' }}</span>
                        @enderror
                    </div>

                    <div class="group">
                        <textarea class="textarea" name="message" id="" rows="3" placeholder=" "
                            style="resize:none;border-color:#fff;color:#fff;"></textarea>
                        <label>Ingresa tu duda o consulta</label>
                        @error('message')
                            <span>{{ 'message' }}</span>
                        @enderror
                    </div>

                    <div class="button">
                        <button type="submit"
                            class="bg-white cursor-pointer hover:bg-[#3477DB] text-center
                        focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-bold rounded-lg
                        px-10 py-2 text-center hover:text-white font-bold
                        border hover:border-[#D9D9D9]   lg:max-w-full max-w-full
                        mb-2 hover:shadow-lg transition-all duration-200 ease-in-out hover:scale-80
                        scale-20 gap-x-2 opacity-90 hover:opacity-100"">Enviar</button>
                    </div>
                </form>
            </div>

            <article class="w-full">
                <span class="font-bold text-white text-2xl">Contáctanos</span>

                <div class="flex flex-col h-full gap-8 items-start w-full">
                    <div class="flex flex-col ">
                        <span class="text-white font-bold">Ubicación</span>
                        <p class="text-[#D9D9D9]"> Prolog. Sánchez Carrión 1400 – Huamachuco – Perú</p>
                    </div>

                    <div class="flex flex-col">
                        <span class="text-white font-bold">Contacto</span>
                        <p class="text-[#D9D9D9]">044-441449</p>
                        <p class="text-[#D9D9D9]">correo.soporte.web@isppjfschco.edu.pe</p>
                    </div>

                    <div class="flex flex-col">
                        <span class="text-white font-bold">Horarios de atención</span>
                        <p class="text-[#D9D9D9]"> Lunes a viernes de 09:00 am - 06:00 pm</p>
                        <p class="text-[#D9D9D9]"> Sábados de 10:00 am - 02:00pm</p>
                    </div>
                </div>
            </article>
        </article>
    </section>

    <section class="render bg-[#D9D9D9] py-8 h-auto">
        <span class="uppercase font-bold text-xl">Visita nuestro local</span>
        <iframe class="w-full h-[60vh] pt-4"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.733683933727!2d-78.04230968875837!3d-7.817988877605852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ade566b5c19db1%3A0x8a6144e6b61a089a!2sIESP%20JOS%C3%89%20FAUSTINO%20S%C3%81NCHEZ%20CARRI%C3%93N!5e0!3m2!1ses-419!2spe!4v1694987281895!5m2!1ses-419!2spe"
            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

@endsection
