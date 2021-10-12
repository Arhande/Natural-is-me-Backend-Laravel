<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Naturalisme | Jual Tanaman Hias Jakarta</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @stack('styles')
  </head>

  <body>
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
    

    @stack('scripts')
    
    <script>
      const button = document.querySelector('#butonn');
      const menu = document.querySelector('#menu');

      button.addEventListener('click', () => {
          menu.classList.toggle("hidden")
      })
    </script>
  </body>
</html>
