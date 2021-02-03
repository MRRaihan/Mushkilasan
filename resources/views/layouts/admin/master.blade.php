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

    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title">Welcome Admin!</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            @yield('content')
        </div>
    </div>
</div>

@include('layouts.admin._script')

</body>

</html>

