<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('titulo')
    </title>
    <link rel="stylesheet" href="http://localhost:8000/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://localhost:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://localhost:8000/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="/css/admin_custom.css">
</head>
<body>

    
    <div class="container">
        <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
              {{-- <a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Subscribe</a> --}}
              <img src="{{ asset('vendor/img/logo.png') }}" alt="">
            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href="https://getbootstrap.com/docs/4.1/examples/blog/#">
                <h1>Venta de Autos</h1>
              </a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
              </a>
              <a class="btn btn-sm btn-outline-secondary" href="{{ route('dashboard.index') }}">Sign up</a>
            </div>
          </div>
        </header>
  
        <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-center">
            <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">HISTORIA</a>
            <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">COMPRA</a>
            <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">VENTA</a>
            <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">CONTACTANOS</a>
            {{-- <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Culture</a>
            <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Business</a>
            <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Politics</a>
            <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Opinion</a>
            <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Science</a>
            <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Health</a>
            <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Style</a>
            <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Travel</a> --}}
          </nav>
        </div>
       @yield('slider') 
        
      <main role="main" class="container">
        @yield('contenido')
      </main><!-- /.container -->
  
      <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
          <a href="https://getbootstrap.com/docs/4.1/examples/blog/#">Back to top</a>
        </p>
      </footer>


    <script>
        Holder.addTheme('thumb', {
          bg: '#55595c',
          fg: '#eceeef',
          text: 'Thumbnail'
        });
    </script>
    <script src="http://localhost:8000/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="http://localhost:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>