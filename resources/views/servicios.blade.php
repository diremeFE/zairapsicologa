{{-- resources/views/sobre-mi.blade.php --}}
@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
  
{{-- 1. ACOMPAÑAMIENTO PSICOLÓGICO --}}
<section class="bg-white">
  <div class="mx-auto max-w-7xl px-6 py-14 lg:py-20">
    <div class="grid items-center gap-10 md:grid-cols-12">

      {{-- Texto --}}
      <div class="md:col-span-7">
        <h2 class="font-['Sora'] text-sm font-semibold tracking-wider text-gray-800 uppercase">
          1. Acompañamiento psicológico
        </h2>

        <div class="mt-4 space-y-4 text-[15px] leading-relaxed text-gray-600">
          <p>
            Soy Psicóloga especializada en Terapias de 3.ª generación y Bioneuroemoción.
            Desde pequeña he sentido la necesidad de comprender y acompañar a las personas, y hoy tengo
            la suerte de poder hacerlo desde un enfoque integrador, sin juicios y con total presencia.
          </p>
          <p>
            He pasado por mi propio proceso personal, incluyendo momentos difíciles como una depresión.
            Esa vivencia me permitió entender, desde dentro, lo que implica pedir ayuda y dejarse acompañar.
          </p>
          <p>
            Por eso hoy acompaño a quienes desean transformar su forma de relacionarse consigo mismas y con los demás.
            Porque el cambio es posible. Y empieza aquí.
          </p>
        </div>

        <a href="{{ url('/contacto') }}"
           class="mt-6 inline-flex items-center justify-center rounded-full bg-[#F0337B] px-6 py-3
                  font-['Sora'] text-white text-sm font-semibold shadow-md hover:bg-[#d42c6e]
                  focus:outline-none focus:ring-4 focus:ring-[#F0337B]/25 transition-colors">
          Quiero una cita
        </a>
      </div>

      {{-- Imagen --}}
      <div class="md:col-span-5">
        <div class="mx-auto max-w-md">
          <img
            src="{{ asset('storage/images/servicios/acompanamiento-psicologico.png') }}"
            alt="Ilustración de acompañamiento psicológico"
            loading="lazy"
            class="w-full h-auto object-contain drop-shadow-xl" />
        </div>
      </div>

    </div>
  </div>
</section>



{{-- 2. ACOMPAÑAMIENTO EN BIONEUROEMOCIÓN --}}
<section class="bg-white">
  <div class="mx-auto max-w-7xl px-6 py-14 lg:py-20">
    <div class="grid items-center gap-10 md:grid-cols-12">

      {{-- Imagen (izquierda en desktop / arriba en móvil) --}}
      <div class="md:col-span-5 order-1 md:order-none">
        <div class="mx-auto max-w-md">
          <img
            src="{{ asset('storage/images/servicios/bioneuroemocion.png') }}"
            alt="Acompañamiento en Bioneuroemoción"
            loading="lazy"
            class="w-full h-auto object-contain drop-shadow-xl" />
        </div>
      </div>

      {{-- Texto --}}
      <div class="md:col-span-7">
        <h2 class="font-['Sora'] text-sm font-semibold tracking-wider text-gray-800 uppercase">
          2. Acompañamiento en Bioneuroemoción
        </h2>

        <div class="mt-4 space-y-4 text-[15px] leading-relaxed text-gray-600">
          <p>
            Soy Psicóloga especializada en Terapias de 3.ª generación y Bioneuroemoción.
            Desde pequeña he sentido la necesidad de comprender y acompañar a las personas, y hoy tengo
            la suerte de poder hacerlo desde un enfoque integrador, sin juicios y con total presencia.
          </p>
          <p>
            He pasado por mi propio proceso personal, incluyendo momentos difíciles como una depresión.
            Esa vivencia me permitió entender, desde dentro, lo que implica pedir ayuda y dejarse acompañar.
          </p>
          <p>
            Por eso hoy acompaño a quienes desean transformar su forma de relacionarse consigo mismas y con los demás.
            Porque el cambio es posible. Y empieza aquí.
          </p>
        </div>

        <a href="{{ url('/contacto') }}"
           class="mt-6 inline-flex items-center justify-center rounded-full bg-[#F0337B] px-6 py-3
                  font-['Sora'] text-white text-sm font-semibold shadow-md hover:bg-[#d42c6e]
                  focus:outline-none focus:ring-4 focus:ring-[#F0337B]/25 transition-colors">
          Quiero una cita
        </a>
      </div>

    </div>
  </div>
</section>



{{-- Métrica + Testimonio (altura auto, igualadas en desktop) --}}
<section class="bg-white">
  <div class="mx-auto max-w-7xl px-6 py-10">
    <div class="grid gap-6 md:grid-cols-2 items-stretch">
      
      {{-- Métrica (violeta) --}}
      <div>
        <div class="h-full rounded-2xl bg-[#EEEBFC] p-8 flex flex-col items-center justify-center text-center">
          <p class="font-['Sora'] text-4xl sm:text-5xl text-gray-800">+200</p>
          <p class="mt-2 text-sm text-gray-600">personas acompañadas</p>
        </div>
      </div>

    {{-- Testimonio (naranja) con comillas como imagen --}}
    <div>
    <div class="relative h-full rounded-2xl bg-[#FFF0EC] p-7 sm:p-8 flex flex-col">
        {{-- Imagen de comillas superpuesta (no ocupa altura) --}}
        <img
        src="{{ asset('storage/images/ui/quotes.svg') }}"  {{-- o .png --}}
        alt="" aria-hidden="true"
        class="absolute left-6 top-5 w-8 sm:w-10 opacity-90 pointer-events-none select-none" />

        {{-- espacio para que el texto no choque con la imagen --}}
        <p class="pl-10 sm:pl-12 pt-1 text-[15px] leading-relaxed text-gray-800">
        Había hecho terapia antes, pero con Zaira sentí que realmente me escuchaban.
        No me dio soluciones rápidas: me acompañó a encontrar las mías.
        </p>
    </div>
    </div>


    </div>
  </div>
</section>



@endsection
