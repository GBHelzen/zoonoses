<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Documento</title>
</head>
<body>
    <embed src="{{ route('documentos.show', $filename) }}" type="application/pdf" width="100%" height="600px">
</body>
</html>