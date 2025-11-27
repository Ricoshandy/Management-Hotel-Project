<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title','Hotel')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .main-btn{/* copy style kamu */}
  </style>
</head>
<body>
  <nav class="...">
    <a href="{{ url('/dashboard') }}">Home</a>
    <a href="{{ route('reservations.create') }}" class="main-bt">Book Now</a>
  </nav>

  <div class="container my-4">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  @yield('scripts')
</body>
</html>
