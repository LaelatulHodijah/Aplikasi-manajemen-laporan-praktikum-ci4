<nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
  <div class="container-fluid">
  <a class="navbar-brand  " href="dash">
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
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Mata Kuliah</a>
          <ul class="dropdown-menu ">
            <li><a class="dropdown-item" href="matWeb">Web Framework</a></li>
            <li><a class="dropdown-item" href="matSql">Pemrograman SQL</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="profile">Profil</a>
        </li>
        </ul>
        <div class="btn-group dropstart">
        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="/assets/img/profile-21753017.png" alt="" class="profileLog rounded-circle" srcset="">
        </button>
        <ul class="dropdown-menu shadow bg-light">
          <li><a class="btn btn-light text-dark" href="<?= base_url(
              'login/logout'
          ) ?>" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
          <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg> Logout </a></li>
        </ul>
        </div>
        </div>
      </div>
    </div>
  </div>
</nav>