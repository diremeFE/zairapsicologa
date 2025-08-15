{{-- resources/views/contacto.blade.php --}}
@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    {{-- CONTACTO --}}
    <section class="bg-gray-50">
        <div class="mx-auto max-w-7xl px-6 py-12 sm:py-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                {{-- Columna izquierda: tarjetas de info --}}
                <div class="lg:col-span-4 space-y-4">
                  
                    {{-- Email --}}
                    <div class="flex items-start gap-4 rounded-xl bg-white ring-1 ring-gray-200 p-5">
                        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#FEE5F0]">
                            {{-- mail icon --}}
                            <svg class="h-5 w-5 text-[#F0337B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold text-gray-900">Correo electrónico</p>
                            <p class="text-sm text-gray-600">zairapsicologiaa@gmail.com</p>
                        </div>
                    </div>

                    {{-- (Opcional) Fax / WhatsApp / Atención online --}}
                    <div class="flex items-start gap-4 rounded-xl bg-white ring-1 ring-gray-200 p-5">
                        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#FEE5F0]">
                            {{-- chat icon --}}
                            <svg class="h-5 w-5 text-[#F0337B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h8M8 14h5M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.84L3 20l.84-4A8.94 8.94 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold text-gray-900">Atención</p>
                            <p class="text-sm text-gray-600">Online · Cita previa</p>
                        </div>
                    </div>

                    {{-- Ubicación --}}
                    <div class="flex items-start gap-4 rounded-xl bg-white ring-1 ring-gray-200 p-5">
                        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#FEE5F0]">
                            {{-- location icon --}}
                            <svg class="h-5 w-5 text-[#F0337B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 11a3 3 0 100-6 3 3 0 000 6z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.5 10.5c0 5.25-7.5 10.5-7.5 10.5S4.5 15.75 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold text-gray-900">Ubicación</p>
                            <p class="text-sm text-gray-600">Valencia · España</p>
                        </div>
                    </div>
                </div>

                {{-- Columna derecha: tarjeta con formulario --}}
                <div class="lg:col-span-8">
                    <div class="rounded-2xl bg-white ring-1 ring-gray-200 p-6 sm:p-8">
                        <h2 class="font-['Sora'] text-xl sm:text-2xl text-gray-900">Envíame un mensaje</h2>
                        <p class="mt-2 text-sm text-gray-600">
                            Cuéntame brevemente qué necesitas y te responderé con la mayor brevedad posible.
                        </p>

                        <form method="POST" action="{{ route('contact.send') }}" class="mt-6 grid gap-4">
    @csrf

    {{-- fila 1: nombre / email --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="name" class="text-sm text-gray-600">
                Nombre <span class="text-red-500">*</span>
            </label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                class="w-full rounded-lg border border-gray-300 px-4 py-3
                focus:outline-none focus:border-[#F0337B] focus:ring-2 focus:ring-[#F0337B]/25
                placeholder:text-gray-400" placeholder="Tu nombre" />
        </div>

        <div>
            <label for="email" class="text-sm text-gray-600">
                Correo electrónico <span class="text-red-500">*</span>
            </label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                class="w-full rounded-lg border border-gray-300 px-4 py-3
                focus:outline-none focus:border-[#F0337B] focus:ring-2 focus:ring-[#F0337B]/25
                placeholder:text-gray-400" placeholder="Correo electrónico" />
        </div>
    </div>

    {{-- fila 2: teléfono / asunto --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="phone" class="text-sm text-gray-600">
                Teléfono
            </label>
            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                class="w-full rounded-lg border border-gray-300 px-4 py-3
                focus:outline-none focus:border-[#F0337B] focus:ring-2 focus:ring-[#F0337B]/25
                placeholder:text-gray-400" placeholder="Teléfono" />
        </div>

        <div>
            <label for="subject" class="text-sm text-gray-600">
                Asunto
            </label>
            <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                class="w-full rounded-lg border border-gray-300 px-4 py-3
                focus:outline-none focus:border-[#F0337B] focus:ring-2 focus:ring-[#F0337B]/25
                placeholder:text-gray-400" placeholder="Asunto" />
        </div>
    </div>

    {{-- mensaje --}}
    <div>
        <label for="message" class="text-sm text-gray-600">
            Mensaje <span class="text-red-500">*</span>
        </label>
        <textarea id="message" name="message" rows="6" required placeholder="Escribe tu mensaje aquí…"
            class="w-full rounded-lg border border-gray-300 px-4 py-3
            focus:outline-none focus:border-[#F0337B] focus:ring-2 focus:ring-[#F0337B]/25
            placeholder:text-gray-400">{{ old('message') }}</textarea>
    </div>

    {{-- Botón de envío --}}
    <button type="submit"
        class="mt-2 inline-flex w-max items-center rounded-full bg-[#F0337B] px-6 sm:px-8 py-3
        font-['Sora'] text-white text-sm font-semibold
        hover:bg-[#d42c6e] focus:outline-none focus:ring-4 focus:ring-[#F0337B]/25 transition">
        Enviar mensaje
    </button>
</form>


                        {{-- Mensaje de éxito (SOLO UNA VEZ) --}}
                        @if (session('status'))
                            <div class="mt-4 rounded-lg bg-green-50 text-green-800 px-4 py-3 ring-1 ring-green-200">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- Errores de validación --}}
                        @if ($errors->any())
                            <div class="mt-4 rounded-lg bg-red-50 text-red-800 px-4 py-3 ring-1 ring-red-200">
                                <ul class="list-disc ml-5">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
