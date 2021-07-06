<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.style')
</head>
<body>
<!-- page header -->
    @include('includes.header') 
    @yield('content')
    <!-- Page footer -->
    @include('includes.footer')

    @include('includes.script')
</body>
</html>