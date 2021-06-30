<!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Test1</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100">

  <nav class="p-6 bg-white dark:bg-gray-900 flex justify-between mb-6">

    <ul class="flex items-center">
      <li><a href="/" class="p-3">Home</a></li>
      <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
      <li><a href="{{ route('posts') }}" class="p-3">Post</a></li>
    </ul>

    <ul class="flex items-center">

      @if (auth()->user())
      <li><a href="javascript:void(0)" class="p-3">Abid Al Wassie</a></li>
      <li><a href="javascript:void(0)" class="p-3">Logout</a></li>
      @else
      <li><a href="javascript:void(0)" class="p-3">Login</a></li>
      <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
      @endif
      
    </ul>

  </nav>

  @yield('content')
</body>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</html>