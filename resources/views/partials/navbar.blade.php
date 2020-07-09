<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      {{-- <li class="nav-item {{ Request::route()->getName() == 'home' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li> --}}
      <li class="nav-item {{ strpos(Request::route()->getName(),'students') !== false ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('students.index')}}">Students</a>
      </li>
    </ul>
  </div>
</nav>
