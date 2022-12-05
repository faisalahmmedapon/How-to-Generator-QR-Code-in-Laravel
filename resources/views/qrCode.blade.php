<!DOCTYPE html>

<html>

<head>

    <title>How to Generate QR Code in Laravel 9?</title>

</head>

<body>



<div class="visible-print text-center">

    {!! QrCode::size(250)->generate('faisalahmmed.com'); !!}
</div>



</body>

</html>
