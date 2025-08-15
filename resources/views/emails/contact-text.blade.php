Nuevo mensaje de contacto - Zaira Psicología
@isset($submittedAt)
Enviado el: {{ $submittedAt }}
@endisset

Nombre: {{ $data['name'] ?? '—' }}
Email:  {{ $data['email'] ?? '—' }}
Teléfono: {{ $data['phone'] ?? '—' }}
Asunto: {{ $data['subject'] ?? '—' }}

Mensaje:
{{ $data['message'] }}

—
Enviado desde el formulario de contacto de Zaira Psicología.
