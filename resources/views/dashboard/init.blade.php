@include('dashboard.partials.head')
@include('dashboard.partials.navbar')
@include('dashboard.partials.messages')
<div class="container-fluid p-5">
@yield('content')
@include('dashboard.partials.footer')