<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Nama Website')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero-section {
      background-color: #b80000;
      color: white;
      padding: 5rem 0;
    }

    .section-heading {
      font-weight: bold;
    }

    .footer-dark {
      background-color: #0c0c0c;
      color: white;
    }

    .btn-yellow {
      background-color: #ffc107;
      color: black;
      font-weight: bold;
    }

    .btn-yellow:hover {
      background-color: #e0a800;
    }

    .card-icon {
      font-size: 2rem;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>

  @include('partials.navbar')

  <main class="container my-4">
    @yield('content')
  </main>

  @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
