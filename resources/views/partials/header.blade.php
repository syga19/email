<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{asset('images/logo.png')}}" alt="" height="100" width="100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        {{-- <li class="nav-item {{ Request::routeIs('index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('index') }}">Clients <span class="sr-only">(current)</span></a>
        </li> --}}
        <li class="nav-item {{ Request::routeIs('index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('index')}}">Clients</a>
         </li>
        <li class="nav-item {{ Request::routeIs('emailtemplate.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('emailtemplate.index') }}">Email templates</a>
        </li>
        {{-- <li class="nav-item {{ route(Route::currentRouteName()) == route('emailtemplates') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('template') }}">Email templates</a>
        </li> --}}
      </ul>
    </div>
  </nav>
  