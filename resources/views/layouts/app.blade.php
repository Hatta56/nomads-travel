<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('prepend-script')
    @stack('addon-style')
 @include('includes.style')
</head>
<body>
    <div class="container">
      @include('includes.navbar')
    </div>


    @yield('content')

   @include('includes.footer')

   @stack('prepend-script')
   @include('includes.script')
   @stack('addon-script')
</body>
</html>
