<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.partials.layouts.head')
  @yield('head')
</head>

<body class="g-sidenav-show  bg-gray-100">
  @include('admin.partials.sidebar.index')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('admin.partials.navbar.index')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @yield('content')

      @include('admin.partials.footer.index')
    </div>
  </main>
  @include('admin.partials.configurator.index')

  @include('admin.partials.layouts.body')

  @include('admin.components.alert')

  @yield('body')
</body>

</html>
