<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'APIX') }}</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-... (CDN integrity code)" crossorigin="anonymous" /><link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />


<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

@livewireStyles 

@yield('stylesAdditionnels')

<!-- My Custom CSS -->
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">


