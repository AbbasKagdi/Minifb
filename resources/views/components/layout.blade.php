<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minifb</title>
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    {{-- adding tailwind for pagination support --}}
    {{-- overridden tailwind to bootstrap using app service provider --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <style>
      .td-0{ text-decoration: none; }
    </style>
    <link rel="icon" href="{{asset('/images/cools.png')}}">
  </head>
</head>
<body>
    @include('partials._navbar')

    {{-- alert --}}
    <x-flash-message />

    {{-- main content --}}
    <main>{{$slot}}</main>
    
    @include('partials._footer')
    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>