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
       <div class="card mt-3 mb-3">
            <div class="card-body">
            <ul>
            <p>Silahkan kumpulkan laporan sementara hasil progres pengerjaan praktikum sesuai BPP untuk dinilai sebagai penilaian aktivitas.</p>
        </ul>
            </div>
        </div>
       </thead>
       <tbody>
        <hr>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Sementara Minggu 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="upload2" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputJudul1" class="form-label">Judul</label>
                        <input type="text" name="nama_matkul" class="form-control" id="exampleInputJudul1" >
                        <div id="judullHelp" class="form-text">Masukan judul / nama file praktikum anda.</div>
                    </div>
                    <div class="input-group mb-3">
                    <input placeholder="Pilih File" type="file" name="file" class="form-control" id="inputGroupFile01">
                    </div>
                    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" value="upload" class="btn btn-primary">Save changes</button>
            </div>
                </form>
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
                    <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
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
