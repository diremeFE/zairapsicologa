<style>
  :root{
    --brand:#F0337B;
    --text:#222;
    --muted:#6B7280;
    --card-radius:22px;
  }

  .hero-about{
    position:relative;
    overflow:hidden;
    background:#fff;
  }

  /* ANCHO COMPLETO + rejilla */
  .hero-inner{
    width:100%;
    max-width:none;                         /* full-bleed */
    margin-inline:auto;
    padding: clamp(20px,4vw,32px) clamp(16px,6vw,64px);
    min-height: clamp(460px, 60vw, 760px);
    display:grid;
    grid-template-columns: minmax(300px, 680px) 1fr; /* texto fijo + visual flexible */
    align-items:center;
    gap: clamp(20px,5vw,56px);
    position:relative;
  }

  /* Columna izquierda */
  .hero-copy{ position:relative; z-index:2; }

  .hero-title{
    font-family: 'Sora', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial;
    color: var(--text);
    font-weight: 400;
    line-height: 1.05;
    font-size: clamp(34px, 7vw, 86px);
    letter-spacing:-0.02em;
  }
  .hero-title .brand{ color: var(--brand); }

  .quote-card{
    margin-top: clamp(16px, 3.5vw, 28px);
    max-width: 560px;
    background:#fff;
    border-radius: var(--card-radius);
    padding: clamp(16px,3vw,22px);
    color:#111827;
    box-shadow:
      0 22px 40px rgba(0,0,0,0.12),
      0 6px 16px rgba(0,0,0,0.06);
    position:relative;
  }
  .quote-card::before{
    content:'“';
    position:absolute;
    left: clamp(14px,2.4vw,18px);
    top: clamp(8px,1.8vw,10px);
    font-size: clamp(28px, 4.5vw, 36px);
    color:#F2995D;
    opacity:.9;
    line-height:1;
  }
  .quote-card p{
    margin:0;
    padding-left: clamp(18px,3.2vw,26px);
    font-size: clamp(14px,1.6vw,18px);
    line-height:1.6;
  }

  /* Columna derecha */
  .hero-visual{
    position:relative;
    min-height: clamp(300px, 44vw, 620px);
  }

  /* Panel rosa pegado a la derecha y a toda altura */
  .pink-panel{
    position:absolute;
    top:0; right:0; bottom:0;
    width: clamp(260px, 36vw, 520px);
    background: var(--brand);
  }

  /* “ZAIRA” translúcido */
  .panel-word{
    position:absolute;
    inset: 0;
    display:flex;
    align-items:center;
    justify-content:center;
    writing-mode: vertical-rl;
    transform: rotate(180deg);
    font-weight: 900;
    font-family: 'Sora', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial;
    color:#fff;
    letter-spacing: .04em;
    font-size: clamp(80px, 12vw, 170px);
    opacity: .35;                          /* menos opacidad */
    pointer-events:none;
    user-select:none;
  }

  /* Foto sobre el panel rosa */
  .hero-person{
    position:absolute;
    bottom: 0;
    right: clamp(16px, 4vw, 40px);
    width: clamp(300px, 46vw, 640px);
    height:auto;
    object-fit:contain;
    pointer-events:none;
    user-select:none;
    max-width:none;                         /* rompe img{max-width:100%} global */
  }

  /* >=901px: fuerza tamaños grandes de desktop */
  @media (min-width: 901px){
    .hero-inner{
      grid-template-columns: minmax(360px, 760px) 1fr;
      min-height: clamp(520px, 58vw, 780px);
    }
    .hero-visual{ min-height: clamp(520px, 58vw, 780px); }
    .pink-panel{ width: clamp(320px, 38vw, 560px); }
    .panel-word{ font-size: clamp(96px, 12.5vw, 180px); opacity:.35; }
    .hero-person{
      width: clamp(480px, 48vw, 760px);
      right: clamp(24px, 3vw, 48px);
      bottom: 0;
      max-width:none;
    }
  }

  /* Ajustes intermedios */
  @media (max-width: 1100px){
    .hero-title{ font-size: clamp(32px, 8vw, 72px); }
    .hero-person{ width: clamp(280px, 52vw, 580px); }
    .pink-panel{ width: clamp(220px, 42vw, 480px); }
  }

  /* Tablet/Móvil */
  @media (max-width: 900px){
    .hero-inner{
      grid-template-columns: 1fr;          /* apila */
      gap: clamp(16px,4vw,24px);
    }
    .hero-visual{
      min-height: clamp(320px, 70vw, 620px);
      margin-top: clamp(6px,2vw,12px);
    }
    .pink-panel{ width: clamp(210px, 56vw, 420px); }
    .panel-word{ font-size: clamp(64px, 20vw, 130px); opacity:.40; }
    .hero-person{
      right: clamp(10px,6vw,36px);
      width: clamp(260px, 72vw, 520px);
    }
  }

  @media (max-width: 520px){
    .quote-card{ max-width: none; }
  }
</style>



{{-- resources/views/sobre-mi.blade.php --}}
@extends('layouts.app')

@section('title', 'Sobre mí')

@section('content')
  {{-- HERO “hecho a mano”, sin imagen de fondo --}}
<section class="hero-about">
  <div class="hero-inner">
    <div class="hero-copy">
      <h1 class="hero-title">
        <span class="brand">CONÓCEME</span> UN<br>
        POCO MÁS
      </h1>

      <div class="quote-card">
        <p>
          Había hecho terapia antes, pero con Zaira sentí que realmente me escuchaban.
        </p>
      </div>
    </div>

    <div class="hero-visual" aria-hidden="true">
      <div class="pink-panel">
        <span class="panel-word">ZAIRA</span>
      </div>

      {{-- Foto recortada en PNG con fondo transparente (opcional) --}}
      <img
        src="{{ asset('storage/images/hero images/unnamed2.png') }}" {{-- ← Ajusta la ruta a tu PNG recortado --}}
        alt=""
        class="hero-person">
    </div>
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
