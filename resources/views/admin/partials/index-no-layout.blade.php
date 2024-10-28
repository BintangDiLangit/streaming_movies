<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.partials.layouts.head')
  @yield('head')
</head>

<body class="g-sidenav-show  bg-gray-100">
  @yield('content')


  @include('admin.partials.layouts.body')
  @include('admin.components.alert')
  @yield('body')
</body>

</html>
