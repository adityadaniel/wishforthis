<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sally & Stefanus | Wish For This</title>

  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/stack-interface.css') }}">
  <link rel="stylesheet" href="{{ asset('css/theme-variables.css') }}">
  <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
</head>
<body>

<div class="main-container">
  @include('header')

  @yield('content')
</div>

</body>
</html>