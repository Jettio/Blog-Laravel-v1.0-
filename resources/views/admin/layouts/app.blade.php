<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="/app.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles -->
    <link href="/app.css" rel="stylesheet">

</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarCollapse"
    aria-controls="navbarCollapse"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/dashboard') }}">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Materials</a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link nav-link-collapse"
          href="#"
          id="hasSubItems"
          data-toggle="collapse"
          data-target="#collapseSubItems2"
          aria-controls="collapseSubItems2"
          aria-expanded="false"
        >Categories</a>
        <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Create</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" {{ url('admin/category') }}  ">
              <span class="nav-link-text">Show</span>
            </a>
          </li>
        </ul>
      </li>
            <li class="nav-item">
        <a
          class="nav-link nav-link-collapse"
          href="#"
          id="hasSubItems"
          data-toggle="collapse"
          data-target="#collapseSubItems4"
          aria-controls="collapseSubItems4"
          aria-expanded="false"
        >Posts</a>
        <ul class="nav-second-level collapse" id="collapseSubItems4" data-parent="#navAccordion">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Create</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Show</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Item</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Comments</a>
      </li>
      
      
    </ul>
    <!--<form class="form-inline ml-auto mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
    <ul  class="nav-inline ml-auto  my-sm-0">
        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
  </div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="footer">
  <div class="container">
      <div class="text-center">
          <span>Copyright @ 2020 |<a href="https://github.com/Jettio"> by Jettio</a></span>
      </div>
  </div>
</footer>
</body>
</html>
