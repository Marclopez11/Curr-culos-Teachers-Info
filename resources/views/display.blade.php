<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mostrar Datos del PDF</title>
    <style>
        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            padding: 10px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Datos del PDF</h1>
    <pre>{{ $pdfData->content }}</pre>
</body>
</html>
