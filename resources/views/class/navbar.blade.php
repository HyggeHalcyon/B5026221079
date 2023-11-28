<!DOCTYPE html>

<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand" href="{{ url('/class/pegawai') }}">B5026221079</a>

      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/class/perkalian') }}">perkalian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/class/biodata') }}">biodata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/class/showjam/3:31:23') }}">showjam</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/class/formulir') }}">formulir</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Tugas
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ url('/tasks/task1') }}">Task 1</a>
            <a class="dropdown-item" href="{{ url('/tasks/task3') }}">Task 3</a>
            <a class="dropdown-item" href="{{ url('/tasks/hello') }}">hello</a>
            <a class="dropdown-item" href="{{ url('/tasks/js2') }}">js1</a>
            <a class="dropdown-item" href="{{ url('/tasks/link') }}">link</a>
            <a class="dropdown-item" href="{{ url('/tasks/responsive') }}">responsive</a>
            <a class="dropdown-item" href="{{ url('/tasks/style') }}">style</a>
            <a class="dropdown-item" href="{{ url('/tasks/validasi') }}">validasi</a>
          </div>
        </li>
      </ul>
    </nav>
    <br>
      
    <div class="container">
      @yield('content')
    </div>
    @include('class/footer')
  </body>

</html>
