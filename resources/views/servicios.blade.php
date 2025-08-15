<style>
:root{
  --brand:#F0337B;              /* rosa corporativo */
  --ink:#2E2E2E;                /* texto principal */
  --muted:#585858;              /* texto secundario */
  --spark:#FFE6F1;              /* rosa pálido para estrellas */
}

/* ===== HERO SERVICIOS ===== */
.svchero{
  position: relative;
  overflow: hidden;
  background:#fff;
  padding-top: clamp(32px,6vw,72px);
  padding-bottom: clamp(24px,5vw,56px);
}

.svchero .wrap{
  position: relative;
  max-width: 1200px;
  margin-inline: auto;
  padding-inline: clamp(16px,4vw,40px);
  text-align: center;
}

/* --- Título --- */
.svchero .title{
  font-family: 'Sora', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial;
  line-height: 1.15;
  color: var(--ink);
  font-weight: 400;
  font-size: clamp(28px,4.6vw,56px);
  letter-spacing: -0.01em;
  margin: 0;
}
.svchero .title .brand{
  color: var(--brand);
  font-weight: 400;
}
.svchero .title .sub{
  font-weight: 400;
}

/* --- Estrellas (puro CSS) --- */
.spark{
  position: absolute;
  width: clamp(22px,3vw,36px);
  aspect-ratio: 1/1;
  opacity: .9;
}
.spark::before,
.spark::after{
  content:"";
  position:absolute; inset:0;
  background: var(--spark);
  border-radius: 14%;
  transform: rotate(45deg);
}
.spark::after{
  transform: rotate(-45deg);
}

/* posiciones (ajustadas a la 2ª imagen) */
.spark.left{
  left: clamp(60px, 14vw, 190px);
  top: clamp(24px, 6vw, 72px);
}
.spark.right{
  right: clamp(60px, 14vw, 190px);
  top: clamp(28px, 6vw, 78px);
}

/* --- Figura + semicírculo --- */
.figure{
  position: relative;
  width: clamp(560px, 60vw, 980px);
  height: clamp(360px, 42vw, 620px);
  margin: clamp(18px,5vw,28px) auto 0 auto;
}

/* semicírculo con ligero degradado */
.figure .arc{
  position:absolute;
  left:50%; transform:translateX(-50%);
  bottom: 0;
  width: 100%;
  height: clamp(220px, 30vw, 360px);
  border-top-left-radius: 9999px;
  border-top-right-radius: 9999px;
  background: radial-gradient(100% 120% at 50% 100%,
              #FDB6D1 0%, #F47CB0 50%, #F05A9B 100%);
  filter: saturate(110%);
  z-index: 0;
}

/* personaje */
.figure img{
  position:absolute;
  left:50%; transform:translateX(-50%);
  bottom: 0;
  width: clamp(320px, 36vw, 600px);
  height:auto;
  display:block;
  z-index: 1;
}

/* ===== Responsivo fino ===== */
@media (max-width: 900px){
  .svchero .title{ font-size: clamp(26px,6vw,44px); }
  .spark.left{ left: clamp(32px,10vw,120px); top: clamp(10px,6vw,48px); }
  .spark.right{ right: clamp(32px,10vw,120px); top: clamp(14px,6vw,50px); }
  .figure{ width: clamp(460px, 76vw, 680px); height: clamp(340px, 60vw, 520px); }
  .figure .arc{ height: clamp(220px, 38vw, 340px); }
  .figure img{ width: clamp(300px, 48vw, 520px); }
}

@media (max-width: 560px){
  .svchero{ padding-top: clamp(20px,6vw,36px); }
  .spark{ width: clamp(18px,5vw,26px); }
  .spark.left{ left: clamp(18px,8vw,40px); top: clamp(12px,6vw,30px); }
  .spark.right{ right: clamp(18px,8vw,40px); top: clamp(14px,6vw,32px); }
  .figure{ width: clamp(320px, 86vw, 520px); height: clamp(300px, 70vw, 440px); }
  .figure .arc{ height: clamp(200px, 46vw, 320px); }
  .figure img{ width: clamp(260px, 56vw, 460px); }
}

</style>

{{-- resources/views/sobre-mi.blade.php --}}
@extends('layouts.app')

@section('title', 'Servicios')

@section('content')

<section class="svchero">
  <div class="wrap">
    <h1 class="title font-medium">
      Mis <span class="brand">servicios psicológicos</span><br>
      <span class="sub">para acompañarte.</span>
    </h1>

    <!-- Estrellas -->
    <span class="spark left" aria-hidden="true"></span>
    <span class="spark right" aria-hidden="true"></span>

    <!-- Figura + semicírculo -->
    <div class="figure">
      <div class="arc" aria-hidden="true"></div>
      <img src="{{ asset('storage/images/hero images/minimalista.png') }}"
           alt="Ilustración Zaira saludando">
    </div>
  </div>
</section>


  
{{-- 1. ACOMPAÑAMIENTO PSICOLÓGICO --}}
<section class="bg-white">
  <div class="mx-auto max-w-7xl px-6 py-14 lg:py-20">
    <div class="grid items-center gap-10 md:grid-cols-12">

      {{-- Texto --}}
      <div class="md:col-span-7">
        <h2 class="font-['Sora'] text-lg font-semibold tracking-wider text-gray-800 uppercase">
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
            src="{{ asset('storage/images/hero images/servicio-1.png') }}"
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
            src="{{ asset('storage/images/hero images/servicio-2.png') }}"
            alt="Acompañamiento en Bioneuroemoción"
            loading="lazy"
            class="w-full h-auto object-contain drop-shadow-xl" />
        </div>
      </div>

      {{-- Texto --}}
      <div class="md:col-span-7">
        <h2 class="font-['Sora'] text-lg font-semibold tracking-wider text-gray-800 uppercase">
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
        src="{{ asset('storage/images/quotes.svg') }}"  {{-- o .png --}}
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
