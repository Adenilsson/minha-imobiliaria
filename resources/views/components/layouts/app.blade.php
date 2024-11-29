<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Rentiz - Real Estate Free Website Template</title>

  <link rel="stylesheet" type="text/css"href="{{asset('assets/css/vendor.css')}}">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


  <!-- Link Bootstrap's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('assets/style.css')}}">

  <!-- Google Fonts ================================================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com" >
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- script ================================================== -->
  <script  src="asset('assets/js/modernizr.js')"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  @livewireStyles
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" tabindex="0">
    <livewire:menu.nav />
    <livewire:billboard.billboard-start />

    <livewire:feature.feature-start />
    <livewire:residence.residence-start />
    <livewire:about.about-start />
    <livewire:testimonial.testimonial-start />
    <livewire:help.help-start />
    <livewire:left.left-start />
    <livewire:footer.footer>



    @livewireScripts

    <script  src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
    <script  src="{{ asset('assets/js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>
</html>
