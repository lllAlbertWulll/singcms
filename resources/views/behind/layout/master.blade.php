<!DOCTYPE html>
<html lang="en">

@include('behind.layout.head')

<body>

<div id="wrapper">

    @include('behind.layout.nav')

    @yield('content')

</div>


<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
<script src="/js/admin/common.js"></script>

</body>

</html>