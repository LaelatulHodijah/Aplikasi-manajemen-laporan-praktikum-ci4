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
                    <form>
                        <label class="mb-1" for="">Mata Kuliah</label>
                        <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Pilih mata kuliah</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>       
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Alfa
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Sakit
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Hadir
                        </label>
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
