<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje de contacto</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f7f7; margin: 0; padding: 20px; }
        .container { background: #ffffff; border-radius: 8px; padding: 20px; max-width: 600px; margin: auto; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        h2 { color: #F0337B; margin-bottom: 20px; }
        .info { margin-bottom: 15px; }
        .label { font-weight: bold; color: #555; }
        .value { color: #333; }
        .footer { margin-top: 30px; font-size: 12px; color: #888; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Nuevo mensaje de contacto</h2>

        <div class="info">
            <span class="label">Nombre:</span>
            <span class="value">{{ $data['name'] }}</span>
        </div>

        <div class="info">
            <span class="label">Email:</span>
            <span class="value"><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></span>
        </div>

        @if(!empty($data['phone']))
        <div class="info">
            <span class="label">Teléfono:</span>
            <span class="value">{{ $data['phone'] }}</span>
        </div>
        @endif

        @if(!empty($data['subject']))
        <div class="info">
            <span class="label">Asunto:</span>
            <span class="value">{{ $data['subject'] }}</span>
        </div>
        @endif

        <div class="info">
            <span class="label">Mensaje:</span>
            <div class="value" style="white-space: pre-line; margin-top: 5px;">
                {{ $data['message'] }}
            </div>
        </div>

        <div class="footer">
            Este mensaje fue enviado desde el formulario de contacto de <strong>Zaira Psicología</strong>.
        </div>
    </div>
</body>
</html>
