<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin._head')
</head>

<body>
<div class="main-wrapper">

    <!-- Header -->
    @include('layouts.admin._header')
    <!-- /Header -->

    <!-- Sidebar -->
    @include('layouts.admin._sidebar')
    <!-- /Sidebar -->

    @yield('content')

</div>

@include('layouts.admin._script')

</body>

</html>

