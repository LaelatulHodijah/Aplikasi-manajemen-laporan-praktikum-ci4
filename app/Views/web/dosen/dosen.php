<?= $this->extend('layout/templateDosen') ?>

<?= $this->section('templatet') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Dashboard</h1>
            <div class="card shadow mt-3">
            <div class="card-body border-0">
                <h3>Selamat Datang di Project UAP-K2 | Website Sistem Informasi Pengumpulan Tugas Milik Kelompok II </h3>
                <small>
                    <ul>
                        <li>Diharapkan untuk mengupdate profil di menu profil</li>
                        <li>Pastikan email yang anda masukan di bagian profile adalah email aktif, karena akan digunakan untuk fasilitas lupa password</li>
                        <li>Petunjuk pelaksanaan kompensasi silahkan akses di menu kompensasi</li>
                        <li>Diharapkan aktif memantau absensi kehadiran, jika memiliki praktik pengganti silahkan diselesaikan sebelum pelaksanaan UAS</li>
                        <li>Jika ada ketidaksesuaian absensi pertemuan, silahkan hubungi dosen pengampu masing-masing</li>
                    </ul>
                </small>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="jumbotron jumbotron-fluid ">
        <div class="container">
        <div class="row mt-3">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <h3 class="mb-0">History</h3>
                        </div>
                        <div class="history">
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>Pemerograman SQL</strong></h5>
                                    <hr>
                                    <p class="card-text">PMI 1417 Pemrograman SQL II Manajemen informatika KELAS 4A.</p>
                                    <a href="matSql" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>Web FrameWork</strong></h5>
                                    <hr>
                                    <p class="card-text">PMI 1416 Pemrograman Web Framework KELAS 4A.</p>
                                    <a href="matWeb" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></a>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection('templatet') ?>
