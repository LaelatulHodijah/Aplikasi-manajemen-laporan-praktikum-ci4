<?= $this->extend('layout/template') ?>

<?= $this->section('temp') ?>
<div class="container">
    <div class="row">
        <div class="col">
        <h1>Pengumpulan Tugas Praktikum</h1>
        </div>
    </div>
    <div class="row">
    <div class="card shadow">
    <div class="card-body">
    <table class="table table-borderless">
       <thead>
        <ul>
            <p>Tugas Dirumah :</p>
            <ol>
            <li>pada minggu ini anda telah berhasil menampilkan data film, datanya dibuat secara statis dalam array pada model</li>
            <li>selanjutkan silahkan buat lagi contoh sederhana menggunakan alur MVC pada project codeIgniter anda, tentang "bebas" namun setiap mahasiswa tidak boleh sama, misalkan si ema menampilkan data hewan, si ivan menampilkan data buah, dan lain sebagainya tidak boleh sama.</li>
            <li>jika ada yang sama maka nilainya akan dibagi 2</li>
            <li>jika kurang jelas silahkan boleh tanyakan.</li>
            <li>lampirkan ke laporan praktikum</li>
            <li>selamat mengerjakan :).</li>
            </ol>
        </ul>
        <hr>
       </thead>
       <tbody>
        <h3 class="buttonModal">Pengumpulan</h3>
        <br>
        <!-- Button trigger modal -->
        <div class="buttonModal">
        <div class="action">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Kumpul
            </button>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Detail
            </button>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Minggu 10</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputJudul1" class="form-label">Judul</label>
                        <input type="Judul" class="form-control" id="exampleInputJudul1" >
                        <div id="judullHelp" class="form-text">Masukan judul / nama file praktikum anda.</div>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <!-- end-->
        <!-- start-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Minggu 10</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputJudul1" class="form-label">Judul</label>
                        <input type="Judul" class="form-control" id="exampleInputJudul1" >
                        <div id="judullHelp" class="form-text">Masukan judul / nama file praktikum anda.</div>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
       </tbody>
    </table>
  </div>
  </div>
    </div>
    
</div>

<?= $this->endSection('temp') ?>
