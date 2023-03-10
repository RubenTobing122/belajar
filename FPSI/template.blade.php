<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{__("units.$site") }}</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ url("css/bootstrap.min.css") }}" />
  <link rel="stylesheet" href="{{ url("css/all.min.css") }}" />
  <link rel="stylesheet" href="{{ asset("css/frontend.css") }}" />

  <link rel="stylesheet" href="{{ url("css/frontend.css") }}" />
  <link rel="stylesheet" href="{{ url("css/$theme/theme.css") }}" />
  @stack('template-css')

  <script src="{{ asset("js/frontend.js") }}" defer></script>
  <script src="{{ url("js/fpsi/timeline.js") }}" defer></script>
  <script src="{{ url("js/fpsi/slider.js") }}" defer></script>
  @stack('template-js')
</head>

<body>
  @php
  $menus = include resource_path('views/theme/' . config('setting.theme') . '/menus.php');
    $menu = $menus['menus'][$lang];
    $footer = $menus['footer'];
  @endphp
  <div id="root-div">
    <x-frontend.navbar-component
      :site="$site"
      :menus="$menu"
      :alternatives="$alternatives"
    />

    @yield('content')

    <x-frontend.footer-component :menus="$footer">
      <x-slot name="logo">
        <div class="d-flex align-items-center justify-content-center">
          <img src="{{ asset("/images/logos/usu-logo.png") }}" width="150px" />
          <div class="h4 fw-bold">{{ __("units.$site") }}</div>
        </div>
      </x-slot>
    </x-frontend.footer-component>

  </div>
  <x-frontend.sidenav-component
    :site="$site"
    :menus="$menu"
  />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script>

  $('.carousel').carousel({
    interval: 0
  })
</body>
</html>
