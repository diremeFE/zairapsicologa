@component('mail::message')
# Nuevo mensaje de contacto

**Nombre:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Teléfono:** {{ $data['phone'] ?? '—' }}  
**Asunto:** {{ $data['subject'] ?? '—' }}

**Mensaje:**
> {!! nl2br(e($data['message'])) !!}

@endcomponent
