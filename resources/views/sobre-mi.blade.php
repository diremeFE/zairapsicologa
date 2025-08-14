{{-- resources/views/sobre-mi.blade.php --}}
@extends('layouts.app')

@section('title', 'Sobre mí')

@section('content')
  {{-- HERO: imagen full-bleed responsive --}}
  <section class="relative isolate overflow-hidden">
    {{-- Imagen (usa WebP si tienes) --}}
    <picture class="absolute inset-0 -z-10">
      {{-- <source type="image/webp" srcset="{{ asset('storage/images/sobre-mi/hero-sobre-mi.webp') }}"> --}}
      <img
        src="{{ asset('storage/images/hero images/hero-sobre-mi.png') }}" {{-- cambia la ruta/extensión --}}
        alt="Zaira durante una sesión"
        class="h-full w-full object-cover object-[60%_40%]" />
        {{-- object-[x_y] ajusta el foco: mueve el recorte sin deformar --}}
    </picture>

    {{-- Contenedor y alturas mínimas --}}
    <div class="relative mx-auto max-w-7xl px-6 lg:px-8
                min-h-[360px] sm:min-h-[480px] lg:min-h-[620px]">
      {{-- Si más adelante quieres texto encima, ponlo aquí --}}
      {{-- 
      <div class="flex h-full items-center">
        <h1 class="font-['Sora'] text-white text-4xl sm:text-5xl lg:text-6xl font-semibold leading-tight">
          CONÓCEME <span class="text-[#F0337B]">UN POCO MÁS</span>
        </h1>
      </div>
      --}}
    </div>
  </section>



  {{-- SOBRE MÍ: foto (ya con forma) + texto + flor flotando --}}
<section class="relative bg-white overflow-visible">
  <div class="relative mx-auto max-w-7xl px-6 py-16 lg:py-20">

    {{-- 🌸 Flor decorativa flotando (no ocupa espacio) --}}
    <img
      src="{{ asset('storage/images/hero images/flor.png') }}"  {{-- ← cambia la ruta/nombre si tu archivo se llama distinto --}}
      alt="" aria-hidden="true"
      class="pointer-events-none select-none
             hidden sm:block            {{-- oculta en móvil si molesta --}}
             absolute -left-10 md:-left-14 lg:-left-20
             top-2 md:top-4
             w-16 md:w-24 lg:w-28
              z-0" />

    <div class="relative z-10 grid items-center gap-10 md:grid-cols-12">
      {{-- Columna imagen (sin recortes) --}}
      <div class="md:col-span-5">
        <div class="mx-auto max-w-[340px]">
          <img
            src="{{ asset('storage/images/hero images/hero-hola-soy-zaira-vicente.png') }}"
            alt="Zaira Vicente"
            class="block w-full h-auto" />
        </div>
      </div>

      {{-- Columna texto --}}
      <div class="md:col-span-7">
        <h2 class="font-['Sora'] text-2xl sm:text-3xl text-gray-900">Hola soy Zaira Vicente</h2>

        <div class="mt-5 space-y-5 text-gray-700 leading-relaxed">
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
            Por eso hoy acompaño a quienes desean transformar su forma de relacionarse consigo mismos y con los demás.
            Porque el cambio es posible. Y empieza aquí.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>




  {{-- CERTIFICACIONES (todas igual altura, sin iconos) --}}
<section class="bg-gradient-to-b from-white to-gray-50">
  <div class="mx-auto max-w-7xl px-6 py-16">
    <div class="max-w-2xl">
      <h2 class="font-['Sora'] text-2xl sm:text-3xl text-gray-900">Certificaciones y formación</h2>
      <p class="mt-2 text-gray-500">Una base sólida y actualizada para acompañarte mejor.</p>
    </div>

    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-fr">
      {{-- Máster en Terapias de Tercera Generación --}}
      <article
        class="h-full min-h-[260px] flex flex-col rounded-3xl bg-white/95 ring-1 ring-gray-200 p-6 sm:p-7
               shadow-[0_8px_24px_rgba(0,0,0,.06)] hover:-translate-y-1 hover:shadow-[0_18px_40px_rgba(0,0,0,.12)]
               transition">
        <div>
          <h3 class="font-['Sora'] text-lg sm:text-xl text-gray-900">Máster en Terapias de Tercera Generación</h3>
          <p class="mt-1 text-sm text-gray-600">Universidad Isabel I · 60 ECTS (1500 h)</p>
        </div>

        <div class="mt-auto pt-5 flex items-center justify-between">
          <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">Máster</span>
          <a href="{{ route('certificados.show', 'master-terapias-tercera-generacion.pdf') }}"
             class="inline-flex items-center gap-2 text-[#F0337B] font-semibold hover:underline"
             target="_blank" rel="noopener">
            Ver certificado
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3Z"/><path d="M19 19H5V5h7V3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7h-2v7Z"/></svg>
          </a>
        </div>
      </article>

      {{-- Curso de Terapia de Pareja --}}
      <article
        class="h-full min-h-[260px] flex flex-col rounded-3xl bg-white/95 ring-1 ring-gray-200 p-6 sm:p-7
               shadow-[0_8px_24px_rgba(0,0,0,.06)] hover:-translate-y-1 hover:shadow-[0_18px_40px_rgba(0,0,0,.12)]
               transition">
        <div>
          <h3 class="font-['Sora'] text-lg sm:text-xl text-gray-900">Curso de Terapia de Pareja</h3>
          <p class="mt-1 text-sm text-gray-600">AEPSIS · 20 h</p>
        </div>

        <div class="mt-auto pt-5 flex items-center justify-between">
          <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">Curso</span>
          <a href="{{ route('certificados.show', 'diploma-curso.pdf') }}"
             class="inline-flex items-center gap-2 text-[#F0337B] font-semibold hover:underline"
             target="_blank" rel="noopener">
            Ver certificado
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3Z"/><path d="M19 19H5V5h7V3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7h-2v7Z"/></svg>
          </a>
        </div>
      </article>

      {{-- Introducción a la Bioneuroemoción --}}
      <article
        class="h-full min-h-[260px] flex flex-col rounded-3xl bg-white/95 ring-1 ring-gray-200 p-6 sm:p-7
               shadow-[0_8px_24px_rgba(0,0,0,.06)] hover:-translate-y-1 hover:shadow-[0_18px_40px_rgba(0,0,0,.12)]
               transition">
        <div>
          <h3 class="font-['Sora'] text-lg sm:text-xl text-gray-900">Curso de Introducción a la Bioneuroemoción</h3>
          <p class="mt-1 text-sm text-gray-600">Certificado</p>
        </div>

        <div class="mt-auto pt-5 flex items-center justify-between">
          <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">Curso</span>
          <a href="{{ route('certificados.show', 'introduccion-bioneuroemocion.pdf') }}"
             class="inline-flex items-center gap-2 text-[#F0337B] font-semibold hover:underline"
             target="_blank" rel="noopener">
            Ver certificado
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3Z"/><path d="M19 19H5V5h7V3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7h-2v7Z"/></svg>
          </a>
        </div>
      </article>

      {{-- Congreso UMH --}}
      <article
        class="h-full min-h-[260px] flex flex-col rounded-3xl bg-white/95 ring-1 ring-gray-200 p-6 sm:p-7
               shadow-[0_8px_24px_rgba(0,0,0,.06)] hover:-translate-y-1 hover:shadow-[0_18px_40px_rgba(0,0,0,.12)]
               transition">
        <div>
          <h3 class="font-['Sora'] text-lg sm:text-xl text-gray-900">XXI Congreso Nacional de Estudiantes de Psicología (CNEP XXI)</h3>
          <p class="mt-1 text-sm text-gray-600">UMH · 16 h · Elche</p>
        </div>

        <div class="mt-auto pt-5 flex items-center justify-between">
          <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">Congreso</span>
          <a href="{{ route('certificados.show', 'congreso-umh-2024.pdf') }}"
             class="inline-flex items-center gap-2 text-[#F0337B] font-semibold hover:underline"
             target="_blank" rel="noopener">
            Ver certificado
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3Z"/><path d="M19 19H5V5h7V3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7h-2v7Z"/></svg>
          </a>
        </div>
      </article>

      {{-- Congreso Psicoflix --}}
      <article
        class="h-full min-h-[260px] flex flex-col rounded-3xl bg-white/95 ring-1 ring-gray-200 p-6 sm:p-7
               shadow-[0_8px_24px_rgba(0,0,0,.06)] hover:-translate-y-1 hover:shadow-[0_18px_40px_rgba(0,0,0,.12)]
               transition">
        <div>
          <h3 class="font-['Sora'] text-lg sm:text-xl text-gray-900">Congreso Psicoflix</h3>
          <p class="mt-1 text-sm text-gray-600">Certificado de asistencia</p>
        </div>

        <div class="mt-auto pt-5 flex items-center justify-between">
          <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">Congreso</span>
          <a href="{{ route('certificados.show', 'congreso-psicoflix-2024.pdf') }}"
             class="inline-flex items-center gap-2 text-[#F0337B] font-semibold hover:underline"
             target="_blank" rel="noopener">
            Ver certificado
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3Z"/><path d="M19 19H5V5h7V3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7h-2v7Z"/></svg>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>




@endsection
