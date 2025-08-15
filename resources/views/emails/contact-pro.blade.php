@php
    // Fallbacks por si no llegan variables
    $logoUrl   = $logoUrl ?? null;
    $preheader = $preheader ?? 'Has recibido un nuevo mensaje desde el formulario de contacto.';
    $brand     = 'Zaira Psicología';
    $brandColor= '#F0337B';
@endphp
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Nuevo mensaje de contacto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* Gmail ignora gran parte del CSS, por eso la mayoría va inline.
       Este bloque solo añade pequeños ajustes en móviles compatibles. */
    @media only screen and (max-width: 620px) {
      .container { width: 100% !important; }
      .content   { padding: 20px !important; }
      h1 { font-size: 22px !important; }
    }
    /* Evita que Gmail/QMail apliquen estilos azules a links de teléfono */
    a[x-apple-data-detectors]{ color: inherit !important; text-decoration: none !important; }
  </style>
</head>
<body style="margin:0; padding:0; background:#f4f5f7; font-family:Arial, Helvetica, sans-serif;">

  <!-- Preheader (oculto) -->
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; color:transparent;">
    {{ $preheader }}
  </div>

  <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background:#f4f5f7;">
    <tr>
      <td align="center" style="padding:24px 12px;">
        <table role="presentation" class="container" cellpadding="0" cellspacing="0" border="0" width="600" style="width:600px; max-width:600px; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 18px rgba(0,0,0,.06);">
          
          <!-- Header -->
          <tr>
            <td align="center" style="background:#ffffff; padding:24px 20px; border-bottom:1px solid #eef0f2;">
              <div style="font-size:12px; color:#99a1ab; letter-spacing:.4px; text-transform:uppercase;">
                {{ $brand }}
              </div>
            </td>
          </tr>

          <!-- Title -->
          <tr>
            <td class="content" style="padding:28px 28px 8px 28px;">
              <h1 style="margin:0 0 6px 0; font-size:24px; line-height:1.3; color:{{ $brandColor }}; font-weight:700;">
                Nuevo mensaje de contacto
              </h1>
              <p style="margin:0; color:#5f6b76; font-size:14px; line-height:1.6;">
                Has recibido un nuevo mensaje desde el formulario de tu web.
                @isset($submittedAt)
                  <br><span style="color:#94a0ab;">Enviado el {{ $submittedAt }}</span>
                @endisset
              </p>
            </td>
          </tr>

          <!-- Card de datos -->
          <tr>
            <td style="padding:8px 28px 0 28px;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #eef0f2; border-radius:10px;">
                <tr>
                  <td style="padding:16px 18px;">
                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                      @if(!empty($data['name']))
                      <tr>
                        <td style="padding:6px 0; width:140px; color:#7a8591; font-size:13px;">Nombre</td>
                        <td style="padding:6px 0; color:#2f3b45; font-size:14px; font-weight:600;">{{ $data['name'] }}</td>
                      </tr>
                      @endif

                      @if(!empty($data['email']))
                      <tr>
                        <td style="padding:6px 0; width:140px; color:#7a8591; font-size:13px;">Email</td>
                        <td style="padding:6px 0; color:#2f3b45; font-size:14px;">
                          <a href="mailto:{{ $data['email'] }}" style="color:{{ $brandColor }}; text-decoration:none;">{{ $data['email'] }}</a>
                        </td>
                      </tr>
                      @endif

                      @if(!empty($data['phone']))
                      <tr>
                        <td style="padding:6px 0; width:140px; color:#7a8591; font-size:13px;">Teléfono</td>
                        <td style="padding:6px 0; color:#2f3b45; font-size:14px;">{{ $data['phone'] }}</td>
                      </tr>
                      @endif

                      @if(!empty($data['subject']))
                      <tr>
                        <td style="padding:6px 0; width:140px; color:#7a8591; font-size:13px;">Asunto</td>
                        <td style="padding:6px 0; color:#2f3b45; font-size:14px;">{{ $data['subject'] }}</td>
                      </tr>
                      @endif
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Mensaje -->
          <tr>
            <td style="padding:18px 28px 0 28px;">
              <div style="color:#7a8591; font-size:13px; margin-bottom:6px;">Mensaje</div>
              <div style="background:#fafbfc; border:1px solid #eef0f2; border-radius:10px; padding:16px; color:#2f3b45; font-size:15px; line-height:1.7;">
                {!! nl2br(e($data['message'])) !!}
              </div>
            </td>
          </tr>

          <!-- CTA -->
          <tr>
            <td align="center" style="padding:24px 28px 8px 28px;">
              <a href="mailto:{{ $data['email'] }}"
                 style="display:inline-block; background:{{ $brandColor }}; color:#ffffff; text-decoration:none; font-weight:700; font-size:14px; padding:12px 22px; border-radius:999px;">
                Responder al cliente
              </a>
            </td>
          </tr>

          <!-- Divider -->
          <tr>
            <td style="padding:12px 28px;">
              <hr style="border:none; border-top:1px solid #eef0f2; margin:0;">
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td align="center" style="padding:16px 20px 26px 20px; color:#9aa4ae; font-size:12px; line-height:1.6;">
              Este mensaje fue enviado desde el formulario de contacto de
              <strong style="color:#6d7680;">{{ $brand }}</strong>.
              <br>
              Si no esperabas este correo, puedes ignorarlo.
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
