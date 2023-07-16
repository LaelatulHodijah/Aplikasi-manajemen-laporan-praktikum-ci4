<?= $this->extend('layout/template') ?>

<?= $this->section('temp') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body shadow">
                    <h5 class="card-title">Profile Mahasiswa</h5>
                    <hr>
                    <form action="" method="post">
                    <div class="pl-lg-4">
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="npm">NPM</label>
                                    <input type="text" id="npm" name="npm" class="form-control form-control-alternative " value="21753017" readonly="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="nama">Nama <span class="small text-info"><i>*Silahkan ganti nama anda jika tidak sesuai</i></span></label>
                                    <input type="text" id="nama" class="form-control form-control-alternative" name="nama" placeholder="Nama" value="Jevi Adriansyah">
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="email">Email <span class="small text-info"><i>*Silahkan masukan email aktif</i></span></label>
                                    <input type="text" id="email" name="email" class="form-control form-control-alternative" required="required" placeholder="Email" value="Jeviadriansyah25@gmail.com">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="password">Password <span class="small text-info"><i>*Silahkan masukan jika ingin mengganti password</i></span></label>
                                    <input type="password" id="password" class="form-control form-control-alternative" name="password" placeholder="Masukan jika ingin mengganti password">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="no_hp">No hp <span class="small text-info"><i>*Silahkan masukan nomor handphone aktif</i></span></label>
                                    <input type="text" id="no_hp" class="form-control form-control-alternative" required="required" placeholder="No HP" name="no_hp" value="082217654872">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control form-control-alternative" required="required" id="jenis_kelamin">
                                    <option value="">-- PILIH --</option>
                                    <option value="l" selected="selected">Laki Laki</option>
                                    <option value="p">Perempuan</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" value="Umbul Limus" name="tempat_lahir" id="tempat_lahir" required="required" class="form-control form-control-alternative" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                        <!--             <input type="date" name="tanggal_lahir" id="tanggal_lahir" required="required" class="form-control .datepicker form-control-alternative" placeholder="Tanggal Lahir" value="2004-01-19"> -->

                                    <input name="tanggal_lahir" id="tanggal_lahir" required="required" class="form-control" placeholder="Select date" type="date" value="2004-01-19">
                                </div>
                            </div>
                            <div class="edit-data">
                                <hr>
                                <a class="btn btn-primary" href="editProfile" role="button">Edit </a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('temp') ?>
