<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="/" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"></i>CATAT YUK</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="/img/avatar.png" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-table me-2"></i>Tabels</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/dashboard/tablepegawai" class="dropdown-item">Tabel Pegawai</a>
                    <a href="/dashboard/tablepengeluaran" class="dropdown-item">Tabel Pengeluaran</a>
                    <a href="/dashboard/tablepemasukan" class="dropdown-item">Tabel Pemasukan</a>
                    <a href="/dashboard/tableproduct" class="dropdown-item">Tabel Produk</a>
                </div>
            </div>

        </div>
    </nav>
</div>