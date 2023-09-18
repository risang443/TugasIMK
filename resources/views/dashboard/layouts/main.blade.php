<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="public/css/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/flickity.css">
  <link rel="icon" href="{{ url('/images/LogoWhiteSquare.png') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
  <title>Al Khoir | Dashboard</title>

  {{-- Trix Editor / Post --}}
  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>
  <style>
    trix-toolbar [data-trix-button-group="file-tools"]{
      display:none
    }
  </style>
  </head>
  <body>

    @include('dashboard.layouts.header')
    @include('dashboard.layouts.sidebar')
                      
       <div class="bg-gray-900 opacity-50 lg:hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
       <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64 pb-[50vh]">
          <main>
             @yield('container')
       </div>
    </div>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
 </div>


    <!-- scripts starts -->
    <script src="/js/script.js"></script>
    <script src="/js/flickity.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <script>
        AOS.init();
      </script>
    <!-- scripts ends -->
  </body>


  
  <!-- footer starts -->
<footer>
</footer>
  <!-- footer ends -->
</html>
