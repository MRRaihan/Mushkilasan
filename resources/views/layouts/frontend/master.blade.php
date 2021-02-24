<!DOCTYPE html>
<html lang="en">
<head>
   @include('layouts.frontend._head')
</head>

<body>

{{--<!-- Loader -->
<div class="page-loading">
    <div class="preloader-inner">
        <div class="preloader-square-swapping">
            <div class="cssload-square-part cssload-square-green"></div>
            <div class="cssload-square-part cssload-square-pink"></div>
            <div class="cssload-square-blend"></div>
        </div>
    </div>
</div>
<!-- /Loader -->--}}

<div class="main-wrapper">

    <!-- Header -->
     @include('layouts.frontend._header')
    <!-- /Header -->

    <!-- Hero Section -->
     @yield('hero_section')
    <!-- /Hero Section -->

    <!-- Category Section -->
     @yield('category_section')
    <!-- /Category Section -->

    <!-- Popular Servides -->
     @yield('popular_servides_section')
    <!-- /Popular Servides -->

    <!-- How It Works -->
     @yield('work_section')
    <!-- /How It Works -->

    <!-- Footer -->
     @include('layouts.frontend._footer')
    <!-- /Footer -->

</div>

<!-- Provider Register Modal -->
 @include('layouts.frontend.modal._provider-register')
<!-- /Provider Register Modal -->

<!-- User Register Modal -->
 {{-- @include('layouts.frontend.modal._user-register') --}}
<!-- /User Register Modal -->

<!-- Login Modal -->
 @include('layouts.frontend.modal._login')
<!-- /Login Modal -->


@include('layouts.frontend._script')
</body>
</html>

