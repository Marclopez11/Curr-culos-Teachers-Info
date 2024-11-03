<!DOCTYPE html>
<html>
<head>
    <title>Subir PDF</title>
</head>
<body>
    <h1>Subir PDF</h1>
    <form action="{{ route('process') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="pdf" accept=".pdf">
        <button type="submit">Procesar</button>
    </form>
</body>
</html>
