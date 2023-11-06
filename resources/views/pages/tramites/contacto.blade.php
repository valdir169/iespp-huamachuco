@extends('layout.app')

@section('title', 'Contacto - Iespp Jfsc Huamachuco')

@section('content')
    <div class="-mt-[120px] h-[700px] w-full bg-cover bg-no-repeat bg-center  flex items-center justify-center flex-col text-center gap-4"
        style='background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8)),
        url({{ asset('images/contacto.png') }});'>
        <h1 class="text-white text-4xl md:text-6xl font-bold font-[Roboto-Bold] mt-[0px] md:mt-[150px] sm:mt-[0px]">¡Estamos aquí para  ayudarte!</h1>
        <span class="text-white  mt-2 md:mt-4  sm:text-xl px-8 xl:px-72 font-[Roboto-Thin] font-bold">Comuníquese con nosotros en cualquier momento y estaremos
            encantados
            de responder a sus preguntas.</span>
    </div>

    <section class="-mt-[150px] md:-mt-[100px] w-full pb-8 ">
        <article
            class="mx-6 sm:mx-6  lg:mx-32 xl:mx-48 bg-[#3477DB] flex flex-col md:flex-row gap-4 py-8 px-6 sm:px-16 md:px-4 lg:px-8 xl:px-16  xl:mx-60 2xl:gap-16 font-[Roboto-Thin] font-bold">

            <div class="w-full text-center md:text-start">
                <span class="font-[Roboto-Regular] text-white text-2xl md:text-4xl ">Envía tu mensaje</span>
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
                        outline-none font-bold rounded-lg  px-10 py-2 hover:text-white font-bold
                        border hover:border-[#D9D9D9] font-[Roboto-Regular] lg:max-w-full max-w-full
                        mb-2 hover:shadow-lg transition-all duration-200 ease-in-out ">Enviar</button>
                    </div>
                </form>
            </div>

            <article class="w-full">
                <span class="font-[Roboto-Regular] text-white text-center md:text-start  text-2xl md:text-4xl ">Contáctanos</span>

                <div class="flex flex-col h-full gap-8 items-start w-full mt-4">
                    <div class="flex flex-col ">
                        <span class="text-white font-bold text-xl">Ubicación</span>
                        <p class="opacity-75 text-white mt-2"> Prolog. Sánchez Carrión 1400 – Huamachuco – Perú</p>
                    </div>

                    <div class="flex flex-col">
                        <span class="text-white font-bold text-xl">Contacto</span>
                        <p class="opacity-75 text-white mt-2">044-441449</p>
                        <p class="opacity-75 text-white">correo.soporte.web@isppjfschco.edu.pe</p>
                    </div>

                    <div class="flex flex-col">
                        <span class="text-white font-bold text-xl">Horarios de atención</span>
                        <p class="opacity-75 text-white mt-2"> Lunes a viernes de 09:00 am - 06:00 pm</p>
                        <p class="opacity-75 text-white"> Sábados de 10:00 am - 02:00pm</p>
                    </div>
                </div>
            </article>
        </article>
    </section>

    <section class="render py-16">
        <span class="title font-bold">Visita nuestro local</span>
        <iframe class="w-full h-[60vh] pt-4"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.733683933727!2d-78.04230968875837!3d-7.817988877605852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ade566b5c19db1%3A0x8a6144e6b61a089a!2sIESP%20JOS%C3%89%20FAUSTINO%20S%C3%81NCHEZ%20CARRI%C3%93N!5e0!3m2!1ses-419!2spe!4v1694987281895!5m2!1ses-419!2spe"
            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

@endsection
