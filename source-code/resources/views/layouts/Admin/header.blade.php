<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Admin</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="{{asset('kai/assets/img/kaiadmin/favicon.ico')}}" type="image/x-icon" />

  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  

  <!-- Fonts and icons -->
  <script src="{{asset('kai/assets/js/plugin/webfont/webfont.min.js')}}"></script>
  <script>
    WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["{{asset('kai/assets/css/fonts.min.css')}}"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('kai/assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('kai/assets/css/plugins.min.css')}}" />
  <link rel="stylesheet" href="{{asset('kai/assets/css/kaiadmin.min.css')}}" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="{{asset('kai/assets/css/demo.css')}}" />
</head>

<body>
  <div class="wrapper">