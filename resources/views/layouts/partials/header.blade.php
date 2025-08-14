<!-- resources/views/layouts/partials/header.blade.php -->
<header class="bg-white font-['Sora']">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <nav class="flex items-center space-x-8 text-sm font-medium text-gray-700">
            <a href="{{ url('/') }}" class="hover:text-[#F0337B] text-[#6F6F6F]">INICIO</a>
            <a href="{{ url('/sobre-mi') }}" class="hover:text-[#F0337B] text-[#6F6F6F]">SOBRE MÍ</a>
            <a href="{{ url('/servicios') }}" class="hover:text-[#F0337B] text-[#6F6F6F]">SERVICIOS</a>
        </nav>

        <a href="{{ url('/') }}" class="flex-shrink-0">
            <img src="{{ asset('storage/images/logo.svg') }}" alt="Logo Zaira Psicología" class="h-22 w-auto">
        </a>

        <a href="{{ url('/contacto') }}"
           class="bg-[#F0337B] text-white text-sm font-normal py-4 px-6 rounded-full hover:bg-[#d42c6e] transition-colors">
            EMPIEZA TU PROCESO
        </a>
    </div>
</header>
