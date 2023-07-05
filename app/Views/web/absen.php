<?= $this->extend('layout/template') ?>

<?= $this->section('temp') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Absensi Mahasiswa | Manajemen Informatika</h1>
        <div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nama_film" class="form-label mt-3">Nama</label>
                            <input type="text" class="form-control" id="nama_film" name="nama_film">
                        </div>
                        <div class="col-md-6">
                            <label for="genre" class="form-label mt-3">Mata Kuliah</label>
                            <select name="id_genre" id="genre" class="form-control" name="id_genre">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="duration" class="form-label mt-3">NPM</label>
                            <input type="text" class="form-control" id="duration" name="duration">
                        </div>
                        <div class="col-md-6">
                            <label for="genre"class="form-label mt-3">Kelas</label>
                            <select  name="id_genre" id="genre"  class="form-control" name="id_genre">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>

<?= $this->endSection('temp') ?>
