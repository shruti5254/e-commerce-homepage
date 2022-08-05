<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ appName() }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    @stack('before-styles')
    <!-- <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"  -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"/>
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet"/>
    
    <livewire:styles />
    @stack('after-styles')
</head>
<body>
  

  <div id="app">
      

        <main>
            @yield('content')
        </main>
  </div><!--app-->

  @stack('before-scripts')
  <!-- <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script> -->
   
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    
    <script src="{{ asset('js/frontend.js') }}"></script>
  
   
    

    <livewire:scripts />
    @stack('after-scripts')
    
    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
   const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
   pagination: {
    el: '.swiper-pagination', -->
    <!-- },

    // Navigation arrows
     navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },

     // And if we need scrollbar
    scrollbar: {
    el: '.swiper-scrollbar',
    },
     }); -->
   <!-- </script> -->
</body>
</html>
