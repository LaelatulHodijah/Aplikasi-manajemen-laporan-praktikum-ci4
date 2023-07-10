<nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="/assets/img/img.png" alt="Bootstrap" width="55" height="55">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dash">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="absen">Absensi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="profile">Profil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Mata Kuliah</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="matWeb">Web Framework</a></li>
            <li><a class="dropdown-item" href="matSql">Pemrograman SQL</a></li>
          </ul>
        </li>
        </ul>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light text-light" type="submit">Search</button>
      </form>
      <a class="btn btn-outline-secondary btn-secondary text-light" href="<?= base_url(
          'login/logout'
      ) ?>" role="button">Logout</a>
    </div>
  </div>
      </button>
    </div>
  </div>
</nav>