{{-- resources/views/welcome.blade.php --}}
@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    {{-- HERO como imagen de fondo --}}
    <section class="relative isolate overflow-hidden">
        {{-- Fondo --}}
        <div class="absolute inset-0 bg-no-repeat bg-cover bg-center"
            style="background-image: url('{{ asset('storage/images/hero images/hero-home.png') }}');">
        </div>

        <div class="absolute inset-0 bg-white/0"></div>

        <div
            class="relative mx-auto max-w-7xl px-6 lg:px-8
              min-h-[420px] sm:min-h-[520px] lg:min-h-[680px]
              flex items-center">
            {{-- 
    <div class="max-w-2xl">
      <h1 class="font-['Sora'] text-4xl sm:text-5xl lg:text-6xl text-gray-900">
        EMPIEZA TU CAMBIO <span class="text-[#F0337B]">HOY</span>
      </h1>
      <p class="mt-4 text-gray-700 max-w-xl">
        Acompañamiento cercano y profesional para lograr claridad, bienestar y resultados sostenibles.
      </p>
      <a href="{{ url('/contacto') }}"
         class="mt-6 inline-flex items-center justify-center rounded-full bg-[#F0337B] px-6 py-3
                font-['Sora'] text-white text-sm font-semibold shadow-md hover:bg-[#d42c6e]
                focus:outline-none focus:ring-4 focus:ring-[#F0337B]/25 transition-colors">
        Empieza tu proceso
      </a>
    </div>
    --}}
        </div>
    </section>

    {{-- ¿Cómo es una sesión conmigo? --}}
    <section class="relative bg-white">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20 lg:py-24">
            {{-- Encabezado --}}
            <div class="text-center">
                <h2 class="font-['Sora'] text-3xl sm:text-4xl lg:text-5xl font-light text-gray-900">
                    ¿Cómo es una <span class="text-[#F0337B]">sesión conmigo?</span>
                </h2>
                <p class="mt-3 text-sm sm:text-base text-gray-400">
                    Psicología online con acompañamiento real. Sin juicios, sin prisas
                </p>
            </div>

            {{-- Tarjetas --}}
            <div class="mt-10 grid gap-6 sm:gap-8 sm:grid-cols-2 lg:grid-cols-3">
                {{-- Card 1 --}}
                <div
                    class="transform sm:rotate-[-5deg] lg:rotate-[-7deg] rounded-3xl border border-gray-200 bg-white p-6 sm:p-8 shadow-md">
                    <div class="font-['Sora'] text-4xl font-semibold text-[#F0337B]">1</div>
                    <p class="mt-4 text-gray-800 leading-relaxed">
                        Hablamos de lo que te preocupa en un entorno seguro
                    </p>
                </div>

                {{-- Card 2 --}}
                <div
                    class="transform sm:rotate-[-2deg] lg:rotate-[-3deg] rounded-3xl border border-gray-200 bg-white p-6 sm:p-8 shadow-md">
                    <div class="font-['Sora'] text-4xl font-semibold text-[#F0337B]">2</div>
                    <p class="mt-4 text-gray-800 leading-relaxed">
                        Juntas/os definimos qué quieres trabajar
                    </p>
                </div>

                {{-- Card 3 --}}
                <div
                    class="transform sm:rotate-[4deg] lg:rotate-[6deg] rounded-3xl border border-gray-200 bg-white p-6 sm:p-8 shadow-md">
                    <div class="font-['Sora'] text-4xl font-semibold text-[#F0337B]">3</div>
                    <p class="mt-4 text-gray-800 leading-relaxed">
                        Te explico cómo te puedo ayudar
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- ¿Cómo trabajo contigo? --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:py-24">
            <div class="grid items-center gap-10 md:grid-cols-12">

                {{-- Columna imagen --}}
                <div class="md:col-span-5">
                    <div class="mx-auto max-w-[420px]">
                        <div class=" p-6 sm:p-8 ">
                            <img src="{{ asset('storage/images/hero images/sillon-y-lampara.png') }}" alt="Sillón y lámpara"
                                loading="lazy" class="w-full h-auto object-contain" />
                        </div>
                    </div>
                </div>

                {{-- Columna texto --}}
                <div class="md:col-span-7">
                    <h2 class="font-['Sora'] text-3xl sm:text-4xl lg:text-5xl font-light text-gray-900">
                        ¿Cómo trabajo contigo?
                    </h2>
                    <p class="mt-4 text-gray-700 leading-relaxed">
                        Trabajo desde una mirada integradora, porque creo que no existen recetas universales:
                        cada persona necesita su propio espacio y proceso.
                    </p>
                    <p class="mt-4 text-gray-700 leading-relaxed">
                        Combino distintas herramientas terapéuticas adaptadas a ti y a tu momento vital.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- Sección: Me llamo Zaira --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:py-24">
            <div class="grid items-center gap-10 md:grid-cols-12">

                {{-- Texto --}}
                <div class="md:col-span-7">
                    <p class="text-sm text-gray-400 font-['Sora']">Me llamo</p>

                    <h2
                        class="mt-1 font-['Playfair_Display'] font-black
                   text-[clamp(48px,12vw,140px)] leading-[0.9] -tracking-[0.02em] text-gray-900">
                        Zaira
                    </h2>

                    <div class="mt-6 space-y-4 text-gray-700 leading-relaxed">
                        <p>
                            Soy Psicóloga especializada en Terapias de 3.ª generación y Bioneuroemoción.
                            Desde pequeña he sentido la necesidad de comprender y acompañar a las
                            personas, y hoy tengo la suerte de poder hacerlo desde un enfoque integrador,
                            sin juicios y con total presencia.
                        </p>
                        <p>
                            He pasado por mi propio proceso personal, incluyendo momentos difíciles como
                            una depresión. Esa vivencia me permitió entender, desde dentro, lo que implica
                            pedir ayuda y dejarse acompañar.
                        </p>
                        <p>
                            Por eso hoy acompaño a quienes desean transformar su forma de relacionarse
                            consigo mismas y con los demás. Porque el cambio es posible. Y empieza aquí.
                        </p>
                    </div>

                    <a href="{{ url('/sobre-mi') }}"
                        class="mt-8 inline-flex items-center justify-center rounded-full bg-[#F0337B] px-6 py-3
                  font-['Sora'] text-white text-sm font-semibold shadow-md hover:bg-[#d42c6e]
                  focus:outline-none focus:ring-4 focus:ring-[#F0337B]/25 transition-colors">
                        LEER MÁS
                    </a>
                </div>

                {{-- Imagen --}}
                <div class="md:col-span-5">
                    <div class="mx-auto max-w-[520px] overflow-hidden">
                        <img src="{{ asset('storage/images/hero images/hero-me-llamo-zaira.png') }}" alt="Zaira"
                            loading="lazy" class="w-full h-full object-cover md:aspect-[4/3] aspect-[4/5]" />
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- MÉTRICAS / CONTADORES --}}
<section class="relative isolate overflow-hidden">
  {{-- Fondo rosa con bordes en diagonal --}}
  <div class="absolute inset-0 -z-10 bg-[#FEE5F0]"
       style="clip-path: polygon(0 8%, 100% 0, 100% 92%, 0 100%);"></div>

  <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20 lg:py-24">
    <div class="grid grid-cols-1 gap-12 text-center sm:grid-cols-3">
      {{-- Item 1 --}}
      <div>
        <p class="font-['Sora'] text-5xl sm:text-6xl font-semibold text-[#F0337B]">
          <span data-counter data-from="0" data-to="200" data-prefix="+"
                data-duration="1400" data-decimals="0">+200</span>
        </p>
        <p class="mt-3 text-gray-600">Pacientes</p>
      </div>

      {{-- Item 2 --}}
      <div>
        <p class="font-['Sora'] text-5xl sm:text-6xl font-semibold text-[#F0337B]">
          <span data-counter data-from="0" data-to="99" data-suffix="%"
                data-duration="1400" data-decimals="0">99%</span>
        </p>
        <p class="mt-3 text-gray-600">Satisfacción</p>
      </div>

      {{-- Item 3 --}}
      <div>
        <p class="font-['Sora'] text-5xl sm:text-6xl font-semibold text-[#F0337B]">
          <span data-counter data-from="0" data-to="170" data-prefix="+"
                data-duration="1400" data-decimals="0">+170</span>
        </p>
        <p class="mt-3 text-gray-600">Opiniones</p>
      </div>
    </div>
  </div>

  
</section>


{{-- TERAPIAS QUE OFREZCO --}}
<section class="bg-white">
  <div class="mx-auto max-w-7xl px-6 py-16">
    <h2 class="font-['Sora'] text-2xl sm:text-3xl text-gray-900 tracking-wide uppercase">
      Terapias que ofrezco
    </h2>

    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-8 items-stretch">
      {{-- Card 1: Acompañamiento Psicológico --}}
<article class="rounded-2xl border border-gray-200 bg-white shadow-[0_14px_30px_rgba(0,0,0,.08)] p-6 sm:p-8 flex flex-col">
  <h3 class="text-xl sm:text-2xl font-semibold text-gray-900">
    Sesión individual de acompañamiento psicológico
  </h3>

  <p class="mt-2 font-['Sora'] text-[#F0337B] font-semibold">50 €/sesión</p>
  <p class="mt-3 text-gray-500">Duración: 1 h • Modalidad: Presencial u online</p>

  <ul class="mt-4 space-y-2 text-gray-800 flex-1">
    <li class="flex gap-2">
      <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
      Terapias de 3ª generación
    </li>
    <li class="flex gap-2">
      <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
      Autoestima, emociones y relaciones
    </li>
    <li class="flex gap-2">
      <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
      Enfoque integrador y humano
    </li>
    <li class="flex gap-2">
      <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
      Recursos prácticos y próximos pasos
    </li>
  </ul>

  <div class="mt-6 flex items-center gap-4">
    <a href="{{ url('/contacto') }}" class="rounded-full bg-[#F0337B] px-5 py-3 text-white text-sm font-semibold shadow-md hover:bg-[#d42c6e] transition">
      Reservar sesión
    </a>
    <a href="{{ url('/servicios/acompanamiento-psicologico') }}" class="text-sm font-medium text-gray-700 hover:text-[#F0337B]">
      Leer más
    </a>
  </div>
</article>

{{-- Card 2: Bioneuroemoción --}}
<article class="rounded-2xl border border-gray-200 bg-white shadow-[0_14px_30px_rgba(0,0,0,.08)] p-6 sm:p-8 flex flex-col">
  <h3 class="text-xl sm:text-2xl font-semibold text-gray-900">
    Sesión de Bioneuroemoción
  </h3>

  <p class="mt-2 font-['Sora'] text-[#F0337B] font-semibold">50 €/sesión</p>
  <p class="mt-3 text-gray-500">Duración: 45–60 min • Modalidad: Online</p>

  <ul class="mt-4 space-y-2 text-gray-800 flex-1">
    <li class="flex gap-2">
      <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
      Exploración del conflicto que quieres trabajar
    </li>
    <li class="flex gap-2">
      <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
      Patrones familiares y creencias limitantes
    </li>
    <li class="flex gap-2">
      <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
      Transgeneracional y lenguaje emocional
    </li>
    <li class="flex gap-2">
      <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
      Cambio de percepción para ganar claridad
    </li>
  </ul>

  <div class="mt-6 flex items-center gap-4">
    <a href="{{ url('/contacto') }}" class="rounded-full bg-[#F0337B] px-5 py-3 text-white text-sm font-semibold shadow-md hover:bg-[#d42c6e] transition">
      Reservar sesión
    </a>
    <a href="{{ url('/servicios/bioneuroemocion') }}" class="text-sm font-medium text-gray-700 hover:text-[#F0337B]">
      Leer más
    </a>
  </div>
</article>

    </div>
  </div>
</section>


{{-- PACKS QUE OFREZCO --}}
<section class="bg-white">
  <div class="mx-auto max-w-7xl px-6 py-16">
    <h2 class="font-['Sora'] text-2xl sm:text-3xl text-gray-900 tracking-wide uppercase">
      Packs que ofrezco
    </h2>

    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-8 items-stretch">
      {{-- Pack Transformacional: 5 Sesiones de Bioneuroemoción --}}
      <article class="rounded-2xl border border-gray-200 bg-white shadow-[0_14px_30px_rgba(0,0,0,.08)] p-6 sm:p-8 flex flex-col">
        <h3 class="text-xl sm:text-2xl font-semibold text-gray-900">
          Pack Transformacional: 5 sesiones de Bioneuroemoción
        </h3>

        <p class="mt-2 font-['Sora'] text-[#F0337B] font-semibold">200 €/pack</p>
        <p class="mt-3 text-gray-600">Profundiza. Libérate. Evoluciona.</p>
        <p class="mt-4 text-gray-500">Incluye: 5 sesiones (60–75 min c/u) • Modalidad: Online</p>

        <ul class="mt-4 space-y-2 text-gray-800 flex-1">
          <li class="flex gap-2">
            <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Acompañamiento progresivo y personalizado
          </li>
          <li class="flex gap-2">
            <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Trabajo en profundidad de un patrón o varios temas
          </li>
          <li class="flex gap-2">
            <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Espacio seguro para integrar cambios y nuevas miradas
          </li>
          <li class="flex gap-2">
            <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Recursos y reflexiones entre sesiones (según proceso)
          </li>
        </ul>

        <div class="mt-6 flex items-center gap-4">
          <a href="{{ url('/contacto') }}" class="rounded-full bg-[#F0337B] px-5 py-3 text-white text-sm font-semibold shadow-md hover:bg-[#d42c6e] transition">
            Reservar pack
          </a>
          <a href="{{ url('/servicios/pack-bioneuroemocion') }}" class="text-sm font-medium text-gray-700 hover:text-[#F0337B]">
            Leer más
          </a>
        </div>
      </article>

      {{-- Pack de Acompañamiento Psicológico – 5 Sesiones --}}
      <article class="rounded-2xl border border-gray-200 bg-white shadow-[0_14px_30px_rgba(0,0,0,.08)] p-6 sm:p-8 flex flex-col">
        <h3 class="text-xl sm:text-2xl font-semibold text-gray-900">
          Pack de Acompañamiento Psicológico: 5 sesiones
        </h3>

        <p class="mt-2 font-['Sora'] text-[#F0337B] font-semibold">200 €/pack</p>
        <p class="mt-3 text-gray-600">Un espacio para escucharte, comprenderte y avanzar a tu ritmo</p>
        <p class="mt-4 text-gray-500">Incluye: 5 sesiones (50–60 min c/u) • Modalidad: Presencial u online</p>

        <ul class="mt-4 space-y-2 text-gray-800 flex-1">
          <li class="flex gap-2">
            <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Espacio confidencial y sin juicios
          </li>
          <li class="flex gap-2">
            <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Herramientas psicológicas adaptadas a tu situación
          </li>
          <li class="flex gap-2">
            <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Acompañamiento continuo para tomar decisiones
          </li>
          <li class="flex gap-2">
            <svg class="h-5 w-5 flex-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color:#F0337B"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Precio preferencial frente a sesiones sueltas
          </li>
        </ul>

        <div class="mt-6 flex items-center gap-4">
          <a href="{{ url('/contacto') }}" class="rounded-full bg-[#F0337B] px-5 py-3 text-white text-sm font-semibold shadow-md hover:bg-[#d42c6e] transition">
            Reservar pack
          </a>
          <a href="{{ url('/servicios/pack-acompanamiento-psicologico') }}" class="text-sm font-medium text-gray-700 hover:text-[#F0337B]">
            Leer más
          </a>
        </div>
      </article>
    </div>
  </div>
</section>


{{-- RESEÑAS / SLIDER --}}
<section class="relative bg-white">
  <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20">
    <div>
      <h2 class="font-['Sora'] text-2xl sm:text-3xl text-gray-900">Lo que dicen de mí</h2>
      <p class="mt-2 text-gray-500">Historias reales de procesos reales.</p>
    </div>

    {{-- Pista (scroll-snap) --}}
    <div id="reviewsTrack"
         class="mt-8 flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4"
         aria-label="Slider de reseñas">
      <style>#reviewsTrack::-webkit-scrollbar{display:none}</style>

      @php
        $reviews = [
          ['name'=>'Paula','avatar'=>'https://i.pravatar.cc/300?img=47','role'=>'Acompañamiento Psicológico','text'=>'pues estoy super contenta con todo, me he sentido suuper comoda hablando y siento que he mejorado aunque haya sido poco tiempo asiq super agradecida','stars'=>5],
          ['name'=>'Anónimo','avatar'=>'https://i.pravatar.cc/300?img=12','role'=>'Proceso personal','text'=>'Zaira, me has enseñado a saber cómo actuar en muchos aspectos de la vida a conocerme a mí mismo, saber lo que me gusta hacer y donde estoy cómodo, también donde no lo estoy me has ayudado mucho y tus consejos y pautas han sido perfectas para saber que debo hacer y que no debo hacer en muchas situaciones las cuales antes no sabía qué hacer me ha servido un montón tu ayuda y solo puedo darte las gracias por tu gran trabajo y por ser tan buena profesional como persona, gracias porque de estar perdido y sin ganas de nada, has echo que tenga ganas de comerme el mundo, me encuentre a mí mismo, me conozca y me hayas echo entender que quiero en mi vida. Muchas gracias por todo','stars'=>5],
          ['name'=>'Alejandra R.','avatar'=>'https://i.pravatar.cc/300?img=32','role'=>'Bioneuroemoción','text'=>'Llegué con muchos bloqueos y me fui entendiendo el porqué de mis reacciones. Fue liberador y muy respetuoso. Noté cambios reales en pocas semanas.','stars'=>5],
          ['name'=>'Marcos D.','avatar'=>'https://i.pravatar.cc/300?img=15','role'=>'Acompañamiento Psicológico','text'=>'Me sentí escuchado sin juicio. Las herramientas que me dio Zaira me ayudaron a ordenar la cabeza y a tomar decisiones con calma.','stars'=>4],
          ['name'=>'Nuria V.','avatar'=>'https://i.pravatar.cc/300?img=68','role'=>'Proceso de 5 sesiones','text'=>'El pack me dio continuidad. Cada sesión sumó claridad y ahora gestiono mejor mis emociones. Agradecida por la cercanía y la metodología.','stars'=>5],
          ['name'=>'Javier P.','avatar'=>'https://i.pravatar.cc/300?img=56','role'=>'Bioneuroemoción','text'=>'No entendía por qué repetía ciertos patrones. Con Zaira aprendí a verlos y cambiarlos. Se nota su experiencia y calidez humana.','stars'=>5],
        ];
      @endphp

      @foreach ($reviews as $r)
      <article class="snap-start shrink-0 w-[86%] sm:w-[480px] lg:w-[520px] rounded-2xl border border-gray-200 bg-white/90 backdrop-blur shadow-[0_14px_30px_rgba(0,0,0,.08)] p-6 sm:p-8">
        <div class="flex items-center gap-4">
          <img src="{{ $r['avatar'] }}" alt="Foto de {{ $r['name'] }}" class="h-12 w-12 rounded-full object-cover">
          <div>
            <p class="font-medium text-gray-900">{{ $r['name'] }}</p>
            <p class="text-sm text-gray-500">{{ $r['role'] }}</p>
          </div>
          <div class="ml-auto flex items-center gap-1 text-[#F0337B]">
            @for ($s=0; $s<$r['stars']; $s++)
              <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.802 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.802-2.034a1 1 0 00-1.175 0l-2.802 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.88 8.72c-.783-.57-.38-1.81.588-1.81H6.93a1 1 0 00.95-.69l1.07-3.292z"/></svg>
            @endfor
          </div>
        </div>

        @php
          $full = $r['text'];
          $short = mb_strimwidth($full, 0, 220, '…', 'UTF-8');
          $isLong = mb_strlen($full, 'UTF-8') > 220;
        @endphp
        <p class="mt-5 text-gray-800 leading-relaxed" data-review-text>{{ $short }}</p>

        @if ($isLong)
          <button class="mt-3 text-sm font-medium text-[#F0337B] hover:underline" data-toggle-more
                  data-full="{{ e($full) }}" data-short="{{ e($short) }}">
            Leer más
          </button>
        @endif
      </article>
      @endforeach
    </div>

    {{-- Puntos (opcional). Si no los quieres, borra este div --}}
    <div id="revDots" class="mt-6 flex justify-center gap-2"></div>
  </div>
</section>


{{-- CTA: ¿Lista/o para empezar tu proceso de cambio? --}}
<section class="relative isolate overflow-hidden">
  {{-- Imagen de fondo --}}
  <picture class="absolute inset-0 -z-10">
    {{-- Si tienes versión .webp, añade un <source> arriba --}}
    <img
      src="{{ asset('storage/images/hero images/hero-yoga.png') }}"  {{-- ajusta la ruta/extensión --}}
      alt=""
      fetchpriority="high"
      class="h-full w-full object-cover object-center" />
      {{-- cambia object-center por object-[50%_30%] si quieres enfocar más arriba --}}
  </picture>

  {{-- Overlay oscuro --}}
  <div class="absolute inset-0 -z-0 bg-black/20"></div>
  {{-- (Opcional) degradado sutil por arriba/abajo
  <div class="absolute inset-0 -z-0 bg-gradient-to-b from-black/30 via-black/40 to-black/30"></div>
  --}}

  {{-- Contenido --}}
  <div class="relative mx-auto max-w-7xl px-6 lg:px-8
              min-h-[420px] sm:min-h-[520px] lg:min-h-[640px]
              flex items-center justify-center text-center">
    <div class="max-w-4xl">
      <h2 class="font-['Sora'] text-white font-semibold
                 text-2xl sm:text-2xl lg:text-6xl leading-tight">
        ¿Lista/o para empezar tu
        <span class="block">proceso de cambio?</span>
      </h2>

      <p class="mt-5 text-white/90 text-base sm:text-lg leading-relaxed">
        Pequeños pasos pueden transformar tu vida. Estoy aquí para acompañarte
        en un espacio seguro y sin juicios.
      </p>

      <div class="mt-10">
        <a href="{{ url('/contacto') }}"
           class="inline-flex items-center justify-center rounded-full
                  bg-[#F0337B] px-10 py-4 sm:px-12 sm:py-5
                  text-white text-base sm:text-lg font-semibold shadow-xl
                  hover:bg-[#d42c6e] focus:outline-none focus:ring-4 focus:ring-[#F0337B]/30 transition-colors">
          RESERVAR SESIÓN
        </a>
      </div>
    </div>
  </div>
</section>

    
@endsection



@push('scripts')
<script>
(() => {
  const onReady = (fn) => (document.readyState !== 'loading') ? fn() : document.addEventListener('DOMContentLoaded', fn);

  onReady(() => {
    const targets = document.querySelectorAll('[data-counter]');
    if (!targets.length) return;

    const startCount = (el) => {
      if (el.dataset.counted === 'true') return;
      el.dataset.counted = 'true';

      const from = parseFloat(el.dataset.from ?? '0');
      const to = parseFloat(el.dataset.to ?? '0');
      const duration = parseInt(el.dataset.duration ?? '1500', 10);
      const prefix = el.dataset.prefix ?? '';
      const suffix = el.dataset.suffix ?? '';
      const decimals = parseInt(el.dataset.decimals ?? '0', 10);

      const t0 = performance.now();
      const tick = (now) => {
        const p = Math.min((now - t0) / duration, 1);
        const eased = 1 - Math.pow(1 - p, 3); // easeOutCubic
        const val = from + (to - from) * eased;
        el.textContent = `${prefix}${val.toFixed(decimals)}${suffix}`;
        if (p < 1) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
    };

    const io = new IntersectionObserver((entries, obs) => {
      entries.forEach((e) => {
        if (e.isIntersecting && e.intersectionRatio >= 0.5) { // 50% visible
          startCount(e.target);
          obs.unobserve(e.target); // sólo una vez
        }
      });
    }, {
      root: null,
      threshold: [0, 0.25, 0.5, 0.75, 1],
      rootMargin: '0px 0px 0px 0px'
    });

    targets.forEach((el) => io.observe(el));
  });
})();
</script>
@endpush


@push('scripts')
<script>
(() => {
  const ready = (fn) => document.readyState !== 'loading' ? fn() : document.addEventListener('DOMContentLoaded', fn);

  ready(() => {
    const track = document.getElementById('reviewsTrack');
    if (!track) return;

    const slides = Array.from(track.querySelectorAll(':scope > article'));
    if (!slides.length) return;

    const dotsWrap = document.getElementById('revDots');
    let idx = 0, raf, timer;

    const updateDots = () => {
      if (!dotsWrap) return;
      dotsWrap.querySelectorAll('button').forEach((d, i) => {
        d.className = 'h-2.5 w-2.5 rounded-full transition-colors ' + (i === idx ? 'bg-[#F0337B]' : 'bg-gray-300');
      });
    };

    const goTo = (i, behavior='smooth') => {
      idx = (i + slides.length) % slides.length;
      const x = slides[idx].offsetLeft - slides[0].offsetLeft; // posición exacta del slide
      track.scrollTo({ left: x, behavior });
      updateDots();
    };

    // Dots
    if (dotsWrap) {
      dotsWrap.innerHTML = '';
      slides.forEach((_, i) => {
        const b = document.createElement('button');
        b.type = 'button';
        b.className = 'h-2.5 w-2.5 rounded-full bg-gray-300';
        b.setAttribute('aria-label', 'Ir a reseña ' + (i+1));
        b.addEventListener('click', () => goTo(i));
        dotsWrap.appendChild(b);
      });
    }

    // Detectar índice activo cuando el usuario arrastra
    const detectIndex = () => {
      const sl = track.scrollLeft + 1;
      let nearest = 0, min = Infinity;
      slides.forEach((el, i) => {
        const dist = Math.abs((el.offsetLeft - slides[0].offsetLeft) - sl);
        if (dist < min) { min = dist; nearest = i; }
      });
      if (nearest !== idx) { idx = nearest; updateDots(); }
    };
    track.addEventListener('scroll', () => { cancelAnimationFrame(raf); raf = requestAnimationFrame(detectIndex); });

    // Autoplay continuo
    const start = () => { stop(); timer = setInterval(() => goTo(idx + 1), 4000); };
    const stop  = () => { if (timer) clearInterval(timer); };
    start();

    // Pausas lógicas
    track.addEventListener('pointerdown', stop, {passive:true});
    track.addEventListener('pointerup',   start, {passive:true});
    document.addEventListener('visibilitychange', () => document.hidden ? stop() : start());

    // Recalcular al cambiar tamaño
    new ResizeObserver(() => goTo(idx, 'auto')).observe(track);

    // Inicial
    goTo(0, 'auto');
  });
})();
</script>
@endpush
