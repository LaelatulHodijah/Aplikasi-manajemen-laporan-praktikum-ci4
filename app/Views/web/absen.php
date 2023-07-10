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
                <h3 class="card-header mb-3"><strong>Absen</strong></h3>
                    <form>
                        <div class="absen">
                        <label class=" mb-1 " for=""><strong>Mata Kuliah</strong></label>
                        <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Pilih mata kuliah</option>
                        <?php foreach ($matkul as $id): ?>
                        <option value="<?= $id['id_matkul'] ?>"><?= $id[
    'nama_matkul'
] ?></option> 
                        <?php endforeach; ?>      
                        </select>
                        <label class="" for=""><strong>Keterangan Mahasiswa</strong></label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="optradio" checked>Sakit 
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="optradio">Alfa
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="optradio">Izin
                        </label>
                        <br>
                        <hr class="a">
                    </form>         
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        </div>
                        </div>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="card-header"><strong>History Absen</strong></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('temp') ?>
