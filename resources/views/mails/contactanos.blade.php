<!DOCTYPE html>
<html lang="es">

<head>
    <title>Contacto | Camara Comercio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f6f6f6;">
    <table cellpadding="0" cellspacing="0" width="100%" style="background-color: #ffffff; border-radius: 6px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <tr>
            <td>
                <table width="100%" cellpadding="0" cellspacing="0">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 20px; text-align: center; background-color: #003366;">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo IESPP José Faustino Sánchez Carrión" style="max-width: 200px;">
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <h1 style="color: #003366; margin-top: 0; margin-bottom: 20px; font-size: 24px;">Nueva Consulta Recibida</h1>
                            
                            <p style="margin-bottom: 20px;">Estimado equipo del IESPP José Faustino Sánchez Carrión,</p>

                            <p style="margin-bottom: 20px;">Se ha recibido una nueva consulta a través del formulario de contacto en la página web. A continuación, se detallan los datos proporcionados por el visitante:</p>

                            <table width="100%" cellpadding="10" cellspacing="0" style="background-color: #f9f9f9; border-radius: 4px; margin-bottom: 20px;">
                                <tr>
                                    <td><strong>Nombres y Apellidos:</strong></td>
                                    <td>{{ $contact['name'] }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Correo electrónico:</strong></td>
                                    <td>{{ $contact['email'] }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Número de celular:</strong></td>
                                    <td>{{ $contact['cellphone'] }}</td>
                                </tr>
                            </table>

                            <h2 style="color: #003366; font-size: 18px; margin-top: 30px; margin-bottom: 15px;">Duda o Consulta:</h2>
                            <div style="background-color: #f0f4f8; padding: 20px; border-radius: 4px; margin-bottom: 20px;">
                                <p style="margin: 0;">{{ $contact['message'] }}</p>
                            </div>

                            <p style="margin-bottom: 20px;">Se requiere atender esta consulta y responder al usuario lo antes posible.</p>

                            <table cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 20px;">
                                <tr>
                                    <td>
                                        <a href="mailto:{{ $contact['email'] }}" style="display: inline-block; padding: 12px 20px; background-color: #007bff; color: #ffffff; text-decoration: none; border-radius: 4px; font-weight: bold; text-align: center;">Responder al Usuario</a>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin-bottom: 10px;">Gracias por su atención.</p>

                            <p style="margin-bottom: 0;">Atentamente,<br>
                            Sistema de Contacto Web<br>
                            IESPP José Faustino Sánchez Carrión</p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #003366; color: #ffffff; text-align: center; padding: 15px; font-size: 12px;">
                            <p style="margin: 0;">Este es un mensaje automático. Por favor, no responda a este correo.</p>
                            <p style="margin: 5px 0 0;">© 2024 IESPP José Faustino Sánchez Carrión. Todos los derechos reservados.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
