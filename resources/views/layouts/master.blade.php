<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.partials._head')
</head>

<body id="page-top">
  <div class="wrapper">
    @include('layouts.partials._sidebar')
    <div class="content-wrapper d-flex flex-column" >
      <div class="content">
        @include('layouts.partials._topbar')
        @include('flash::message')
        <div class="app" id="app">
          @yield('content')
        </div>
         
        <!-- Container Fluid-->
        
      </div>
      @include('layouts.partials._footer')
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
 @include('layouts.partials._footer-script')
</body>

</html>