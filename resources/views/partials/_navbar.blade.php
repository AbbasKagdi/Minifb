<nav class="navbar  navbar-dark navbar-expand-lg bg-dark">
  <div class="container-fluid">
    {{-- <a class="navbar-brand" href="#">Minifb</a> --}}
    <div class="container-fluid ">
      <a class="navbar-brand" href="/">
        <img src="{{asset('/images/cools.png')}}" alt="Logo" width="24" height="24" class="hidden-sm hidden-xs" />
        Minifb
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-sm btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Padding for content -->
{{-- <div class="m-3">ㅤ</div> --}}