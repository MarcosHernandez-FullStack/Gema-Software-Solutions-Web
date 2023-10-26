<!DOCTYPE html>
<html>

<head>
    <title>Mi Correo</title>
</head>

<body>
    <h1>Información de Contacto:</h1>
    <p><strong>Nombre:</strong> {{ $contact['nombre'] }}</p>
    <p><strong>Email:</strong> {{ $contact['email'] }}</p>
    <p><strong>Teléfono:</strong> {{ $contact['telefono'] }}</p>
    <p><strong>Asunto:</strong> {{ $contact['asunto'] }}</p>
    <p><strong>Mensaje:</strong> {{ $contact['mensaje'] }}</p>
</body>

</html>
