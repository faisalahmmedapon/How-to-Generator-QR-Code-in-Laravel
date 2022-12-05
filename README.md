Step 1: Install Laravel 8

In first step, If you haven't installed laravel 8 in your system then you can run bellow command and get fresh Laravel project.

composer create-project --prefer-dist laravel/laravel blog

Step 2: Install simple-qrcode Package

Now we require to install simple-qrcode package for qr code generator, that way we can use it's method. So Open your terminal and run bellow command.

composer require simplesoftwareio/simple-qrcode

Now open config/app.php file and add service provider and aliase.

config/app.php

'providers' => [

    ....

    SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class

],

'aliases' => [

    ....

    'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class

],

Read Also: How to Create Service in Angular 8 using cli?

Step 3: Create Route

In this step, we will create one route for testing example. So, let's add new route on that file.

routes/web.php

<?php


Route::get('qr-code-g', function () {

  

    \QrCode::size(500)

            ->format('png')

            ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));

    

  return view('qrCode');

    

});

Step 4: Create Blade file

now we need to create qrCode.blade.php for display qr code. so let's create blade file as like bellow code:

resources/views/qrCode.blade.php

Read Also: Laravel 8 Multiple Database Connection Example

<!DOCTYPE html>

<html>

<head>

    <title>How to Generate QR Code in Laravel 9? - Faisal Ahmmed </title>

</head>

<body>

    

<div class="visible-print text-center">


    {!! QrCode::size(250)->generate('faisalahmmed.com'); !!}


</div>

    

</body>

</html>
