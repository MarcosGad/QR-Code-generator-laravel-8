<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<!-- https://www.simplesoftware.io/#/docs/simple-qrcode -->
    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h2>QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('MarcosGad') !!}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('MarcosGad') !!}
            </div>
        </div>

    </div>
</body>
</html>