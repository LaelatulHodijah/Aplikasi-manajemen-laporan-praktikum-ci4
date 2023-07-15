<nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
  <div class="container-fluid">
  <a class="navbar-brand  " href="dosen">
      <img src="/assets/img/img.png" alt="Bootstrap" width="55" height="55">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dosen">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Mata Kuliah</a>
          <ul class="dropdown-menu ">
            <li><a class="dropdown-item" href="frameDosen">Web Framework</a></li>
            <li><a class="dropdown-item" href="sqlDosen">Pemrograman SQL</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="profileDosen">Profil</a>
        </li>
        </ul>
        <div class="btn-group dropstart">
        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
          <img src="" alt="" class="profileLog rounded-circle" srcset="">
        </button>
        <ul class="dropdown-menu shadow bg-light">
          <li><a class="btn btn-light text-dark" href="<?= base_url(
              'login/logout'
          ) ?>" role="button"> Logout </a></li>
        </ul>
        </div>
        </div>
      </div>
    </div>
  </div>
</nav>