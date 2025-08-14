<!-- resources/views/layouts/partials/footer.blade.php -->
<footer class="border-t border-gray-200 bg-gray-50">
  <div class="mx-auto max-w-7xl px-6 py-12 lg:py-16">
    <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">

      {{-- Marca + texto corto --}}
      <div>
        <a href="{{ url('/') }}" class="inline-flex items-center gap-3">
          <img src="{{ asset('storage/images/logo.svg') }}" alt="Zaira Psicología" class="h-10 w-auto">
          <span class="sr-only">Zaira Psicología</span>
        </a>
        <p class="mt-4 text-sm text-gray-600">
          Acompañamiento psicológico y Bioneuroemoción® para un cambio claro,
          humano y sostenible.
        </p>

        {{-- Social --}}
        <div class="mt-4 flex items-center gap-3">
          <a href="#" aria-label="Instagram"
             class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-gray-300 hover:border-[#F0337B] hover:text-[#F0337B]">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5Zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7Zm5 3.5a5.5 5.5 0 1 1 0 11 5.5 5.5 0 0 1 0-11Zm0 2a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm5.25-2.25a.75.75 0 1 1 0 1.5.75.75 0 0 1 0-1.5Z"/></svg>
          </a>
          <a href="#" aria-label="LinkedIn"
             class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-gray-300 hover:border-[#F0337B] hover:text-[#F0337B]">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 1 1 0 5.001 2.5 2.5 0 0 1 0-5ZM3 9h4v12H3zM14.5 9c3.04 0 5.5 2.46 5.5 5.5V21h-4v-6.5a1.5 1.5 0 1 0-3 0V21h-4V9h4v1.57A5 5 0 0 1 14.5 9Z"/></svg>
          </a>
        </div>
      </div>

      {{-- Navegación --}}
      <div>
        <h3 class="font-['Sora'] text-sm font-semibold text-gray-900 uppercase tracking-wide">Navegación</h3>
        <ul class="mt-4 space-y-2">
          <li><a href="{{ url('/') }}" class="hover:text-[#F0337B]">Inicio</a></li>
          <li><a href="{{ url('/sobre-mi') }}" class="hover:text-[#F0337B]">Sobre mí</a></li>
          <li><a href="{{ url('/servicios') }}" class="hover:text-[#F0337B]">Servicios</a></li>
          <li><a href="{{ url('/contacto') }}" class="hover:text-[#F0337B]">Contacto</a></li>
        </ul>
      </div>

      {{-- Servicios --}}
      <div>
        <h3 class="font-['Sora'] text-sm font-semibold text-gray-900 uppercase tracking-wide">Servicios</h3>
        <ul class="mt-4 space-y-2">
          <li><a href="{{ url('/servicios/acompanamiento-psicologico') }}" class="hover:text-[#F0337B]">Acompañamiento psicológico</a></li>
          <li><a href="{{ url('/servicios/bioneuroemocion') }}" class="hover:text-[#F0337B]">Bioneuroemoción</a></li>
          <li><a href="{{ url('/servicios/pack-acompanamiento-psicologico') }}" class="hover:text-[#F0337B]">Pack Acompañamiento (5 sesiones)</a></li>
          <li><a href="{{ url('/servicios/pack-bioneuroemocion') }}" class="hover:text-[#F0337B]">Pack Bioneuroemoción (5 sesiones)</a></li>
        </ul>
      </div>

      {{-- Contacto / CTA --}}
      <div>
        <h3 class="font-['Sora'] text-sm font-semibold text-gray-900 uppercase tracking-wide">Contacto</h3>
        <ul class="mt-4 space-y-2 text-sm">
          <li class="flex items-center gap-2">
            <svg class="h-4 w-4 text-[#F0337B]" viewBox="0 0 24 24" fill="currentColor"><path d="M2 6.5A2.5 2.5 0 0 1 4.5 4h15A2.5 2.5 0 0 1 22 6.5V17a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V6.5Zm2.5-.5a.5.5 0 0 0-.5.5v.3l7.5 4.7 7.5-4.7V6.5a.5.5 0 0 0-.5-.5h-14Z"/></svg>
            <a href="mailto:hola@zairapsicologa.com" class="hover:text-[#F0337B]">hola@zairapsicologa.com</a>
          </li>
          <li class="flex items-center gap-2">
            <svg class="h-4 w-4 text-[#F0337B]" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79a15.1 15.1 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C11.85 21 3 12.15 3 1a1 1 0 0 1 1-1h3.49a1 1 0 0 1 1 1c0 1.24.2 2.45.57 3.57a1 1 0 0 1-.25 1.02l-2.19 2.2Z"/></svg>
            <a href="https://wa.me/34600000000" class="hover:text-[#F0337B]">+34 600 000 000</a>
          </li>
          <li class="flex items-center gap-2">
            <svg class="h-4 w-4 text-[#F0337B]" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a7 7 0 0 1 7 7c0 5.25-7 13-7 13S5 14.25 5 9a7 7 0 0 1 7-7Zm0 4a3 3 0 1 0 .001 6.001A3 3 0 0 0 12 6Z"/></svg>
            <span>Online · España</span>
          </li>
        </ul>

        <a href="{{ url('/contacto') }}"
           class="mt-6 inline-flex items-center justify-center rounded-full bg-[#F0337B] px-5 py-3 text-white text-sm font-semibold shadow-md hover:bg-[#d42c6e] transition">
          Empieza tu proceso
        </a>
      </div>
    </div>

    {{-- Barra inferior --}}
    <div class="mt-12 border-t border-gray-200 pt-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
      <p class="text-sm text-gray-500">© {{ date('Y') }} Zaira Psicología. Todos los derechos reservados.</p>
      <ul class="flex flex-wrap items-center gap-x-6 gap-y-2 text-sm">
        <li><a href="{{ url('/aviso-legal') }}" class="text-gray-500 hover:text-[#F0337B]">Aviso legal</a></li>
        <li><a href="{{ url('/privacidad') }}" class="text-gray-500 hover:text-[#F0337B]">Privacidad</a></li>
        <li><a href="{{ url('/cookies') }}" class="text-gray-500 hover:text-[#F0337B]">Cookies</a></li>
      </ul>
    </div>
  </div>

  {{-- Botón "volver arriba" (opcional) --}}
  <a href="#top"
     class="group fixed bottom-6 right-6 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white/90 shadow-lg ring-1 ring-black/5 backdrop-blur hover:bg-white"
     aria-label="Volver arriba">
    <svg class="h-5 w-5 text-gray-700 group-hover:text-[#F0337B]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
    </svg>
  </a>
</footer>
