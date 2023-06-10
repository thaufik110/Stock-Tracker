<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="/" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
        <input class="form-control bg-dark border-0" type="search" placeholder="Search">
    </form>

    <div class="navbar-nav align-items-center ms-auto">
        @auth
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="/img/avatar.png" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">{{ auth()->user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <li><a href="" class="dropdown-item"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                    <li><a href="/dashboard/user" class="dropdown-item"><i class="bi bi-person-lines-fill"></i> Akun Profil</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-x-square-fill"></i> Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        @else
            <div class="">
                <li style="margin: 20px 5px 20px 0px">
                    <a href="/login" class="" style="border: 3px solid yellow; padding: 5px 10px 5px 10px;border-radius:8px; color:yellow">
                        LOGIN
                    </a>
                </li>
            </div> 
        @endauth
        

    </div>
</nav>
<!-- Navbar End -->