<nav class="navbar-expand-lg navbar m-0 p-0">
    <div class="container-fluid  bg-primary">
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $pages === 'home' ? 'active' : '' }} text-dark font-weight-normal"
                        aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ $pages === 'list' ? 'active' : '' }} text-dark font-weight-normal"
                        href="/List">List Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ $pages === 'management' ? 'active' : '' }} text-dark font-weight-normal"
                        href="/Management">List
                        Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ $pages === 'about' ? 'active' : '' }} text-dark font-weight-normal"
                        href="/About">About</a>
                </li>
        </div>
    </div>
</nav>
