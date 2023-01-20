<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Localization</title>
</head>

<body>
    <h1> {{ __('page') }}</h1>
    <ul>
        <li> {{ __('home') }}</li>
        <li> {{ __('about') }}</li>
        <li> {{ __('contact') }}</li>
        <li> {{ __('neha') }}</li>

    </ul>
    <h1> {{ __('welcome', ['name' => 'sonam']) }}</h1>
</body>

</html>
