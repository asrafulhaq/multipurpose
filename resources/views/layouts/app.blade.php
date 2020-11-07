<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    @include('layouts.header')

    @include('layouts.menu')

    @section('main-content')
        @show

</div>
<!-- /Main Wrapper -->

    @include('layouts.partials.scripts')

</body>

</html>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>
