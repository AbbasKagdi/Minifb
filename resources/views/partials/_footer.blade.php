{{-- to do float footer to bottom without position sticky or absolute --}}
<footer class="footer mt-auto">
<div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">Minifb &copy; 2022</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img class="bi me-2" width="40" height="40" src="{{asset('/images/cools.png')}}"/>
        </a>

        <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Listings</a></li>
        <li class="nav-item"><a href="/listings/create" class="nav-link px-2 text-muted">Post a Listing</a></li>
        <li class="nav-item"><a href="/listings/manage" class="nav-link px-2 text-muted">Manage listings</a></li>
        </ul>
    </div>
</div>
</footer>