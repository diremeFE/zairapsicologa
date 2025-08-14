<!-- resources/views/layouts/partials/header.blade.php -->
<header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-gray-100 font-['Sora']">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="flex h-16 sm:h-20 items-center justify-between">

      <!-- Izquierda: botón mobile + logo -->
      <div class="flex items-center gap-3">
        <!-- Toggle mobile -->
        <button id="navToggle"
                class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#F0337B]/30"
                aria-controls="mobileNav" aria-expanded="false">
          <span class="sr-only">Abrir menú</span>
          <!-- icono hamburguesa -->
          <svg id="iconOpen" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <!-- icono cerrar -->
          <svg id="iconClose" class="hidden h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>

        <a href="{{ url('/') }}" class="flex-shrink-0">
          <img src="{{ asset('storage/images/logo.svg') }}" alt="Logo Zaira Psicología"
               class="h-10 sm:h-12 w-auto">
        </a>
      </div>

      <!-- Centro: navegación desktop -->
      <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
        <a href="{{ url('/') }}" class="hover:text-[#F0337B] text-[#6F6F6F]">INICIO</a>
        <a href="{{ url('/sobre-mi') }}" class="hover:text-[#F0337B] text-[#6F6F6F]">SOBRE MÍ</a>
        <a href="{{ url('/servicios') }}" class="hover:text-[#F0337B] text-[#6F6F6F]">SERVICIOS</a>
      </nav>

      <!-- Derecha: CTA desktop -->
      <div class="hidden md:block">
        <a href="{{ url('/contacto') }}"
           class="inline-flex items-center rounded-full bg-[#F0337B] px-5 py-3 text-white text-sm font-semibold shadow-md hover:bg-[#d42c6e] transition-colors">
          EMPIEZA TU PROCESO
        </a>
      </div>
    </div>
  </div>

  <!-- Panel móvil -->
  <div id="mobileNav" class="md:hidden hidden border-t border-gray-100 bg-white">
    <div class="mx-auto max-w-7xl px-4 py-4 space-y-1">
      <a href="{{ url('/') }}" class="block rounded-md px-2 py-2 text-gray-700 hover:bg-gray-100">INICIO</a>
      <a href="{{ url('/sobre-mi') }}" class="block rounded-md px-2 py-2 text-gray-700 hover:bg-gray-100">SOBRE MÍ</a>
      <a href="{{ url('/servicios') }}" class="block rounded-md px-2 py-2 text-gray-700 hover:bg-gray-100">SERVICIOS</a>
      <a href="{{ url('/contacto') }}"
         class="mt-2 inline-flex w-full items-center justify-center rounded-full bg-[#F0337B] px-5 py-3 text-white text-sm font-semibold hover:bg-[#d42c6e] transition-colors">
        EMPIEZA TU PROCESO
      </a>
    </div>
  </div>
</header>

<!-- JS mínimo para el toggle -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('navToggle');
    const panel = document.getElementById('mobileNav');
    const iconOpen = document.getElementById('iconOpen');
    const iconClose = document.getElementById('iconClose');

    if (!btn || !panel) return;

    btn.addEventListener('click', () => {
      const open = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', String(!open));
      panel.classList.toggle('hidden');
      iconOpen.classList.toggle('hidden');
      iconClose.classList.toggle('hidden');
    });
  });
</script>
