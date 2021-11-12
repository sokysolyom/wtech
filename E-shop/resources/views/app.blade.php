<!DOCTYPE html>
<html lang="en">

<head>
  @include('Common.head')
  @yield('styles')
</head>

  <body>

    @include('Common.navbar')

    @yield('content')


    @include('Common.footer')
    
  </body>


</html>