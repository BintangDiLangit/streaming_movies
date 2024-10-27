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
  <!--   Core JS Files   -->
  <script src="/admin/assets/js/core/popper.min.js"></script>
  <script src="/admin/assets/js/core/bootstrap.min.js"></script>
  <script src="/admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/admin/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/admin/assets/js/plugins/chartjs.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/admin/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>

  @include('admin.components.alert')

  @yield('body')
</body>

</html>
