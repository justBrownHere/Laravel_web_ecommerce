<!DOCTYPE html>
<html lang="en">
<head>
@include('head')
</head>
    
 <body>

<!-- header -->
    @include('header')
<!-- end header -->

@include('cart')

@yield('content')



<!-- footer -->
@include('footer')

<!-- end footer -->

</body>
</html>