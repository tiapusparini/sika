                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-right">        
                                    <footer>
                                        <h7>&copy; 2019 YAKES TELKOM - SIKA 2.0</h7> 
                                    </footer> 
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
        </div>
    </div>
<script src="<?php echo base_url().'../assets/scripts/app.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'../assets/scripts/main.js'; ?>"></script>

</body>
</html>

<!-- Modal Area -->
<!-- TAMBAH -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Tambah Area</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('master_data/insertArea'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kode Area</h7>
                    <input type="text" name="kodeArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Nama Area</h7>
                    <input type="text" name="namaArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Manajer Area</h7>
                    <input type="text" name="manajerArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Singkatan Area</h7>
                    <input type="text" name="singkatanArea" class="form-control col-8">
                </div><br>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- EDIT -->
<div class="modal fade" id="modalEditArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Edit Area</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('master_data/editArea'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kode Area</h7>
                    <input type="text" id="kode-area" name="kodeArea" class="form-control col-8" readonly>
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Nama Area</h7>
                    <input type="text" id="nama-area" name="namaArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <!-- <h7 class="col-sm-3 col-form-label">Manajer Area</h7> -->
                    <input type="text" name="manajerArea" class="form-control col-8" hidden>
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Singkatan Area</h7>
                    <input type="text" id="singkatan-area" name="singkatanArea" class="form-control col-8" readonly>
                </div><br>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- HAPUS -->
<div class="modal fade bd-example-modal-sm-area" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
            <form action="<?php echo base_url('master_data/deleteArea'); ?>" method="POST">
                <input type="submit" name="submit" class="btn btn-primary" value="Ya">
                <input id="delete-input" type="text" name="kode_area" value="id" hidden>
            </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Tidak</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Personal Area -->
<!-- TAMBAH -->
<div class="modal fade" id="exampleModalPersonalArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Tambah Personal Area</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('master_data/insertPersonalArea'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kode Personal Area</h7>
                    <input type="text" name="kodePersonalArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Nama Personal Area</h7>
                    <input type="text" name="namaPersonalArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Manajer Area</h7>
                    <input type="text" name="manajerPersonalArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Status</h7>
                    <div class="position-relative form-check col-sm-2">
                        <label class="form-check-label">
                            <input name="radioPersonalArea" type="radio" class="form-check-input" value="Aktif"> Aktif
                        </label>
                    </div>
                    <div class="position-relative form-check">
                        <label class="form-check-label">
                            <input name="radioPersonalArea" type="radio" class="form-check-input" value="Tidak"> Tidak
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- EDIT -->
<div class="modal fade" id="ModalEditPersonalArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Edit Personal Area</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('master_data/updatePersonalArea'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kode Personal Area</h7>
                    <input type="text" id=kode_PersonalArea name="kodePersonalArea" class="form-control col-8" readonly>
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Nama Personal Area</h7>
                    <input type="text" id=nama_PersonalArea name="namaPersonalArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Manajer Area</h7>
                    <input type="text" name="manajerPersonalArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Status</h7>
                    <div class="position-relative form-check col-sm-2">
                        <label class="form-check-label">
                            <input name="radioPersonalArea" id="status_PersonalArea1" type="radio" class="form-check-input" value="Aktif"> Aktif
                        </label>
                    </div>
                    <div class="position-relative form-check">
                        <label class="form-check-label">
                            <input name="radioPersonalArea" id="status_PersonalArea0" type="radio" class="form-check-input" value="Tidak"> Tidak
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- HAPUS -->
<div class="modal fade bd-example-modal-sm-personalArea" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <form action="<?php echo base_url('master_data/deletePersonalArea'); ?>" method="POST">
                    <input type="submit" name="submit" class="btn btn-primary" value="Ya">
                    <input id="delete-personal-area" type="text" name="kode_personal_area" value="id" hidden>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Tidak</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Personal Sub Area -->
<!-- TAMBAH -->
<div class="modal fade" id="ModalPersonalSubArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Tambah Personal Sub Area</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('master_data/insertPersonalSubArea'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Personal Area</h7>
                    <div class="position-relative form-group">
                        <select type="select" name="selectPersonalSubArea" class="form-control col-12">
                        <?php foreach($personalSubArea as $a){?>
                        <option value="<?php echo $a->kode_personal_area;?>"><?php echo $a->kode_personal_area;?></option><?php }?>  
                    </select></div>              
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kode Sub Area</h7>
                    <input type="text" name="kodePersonalSubArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Nama Sub Area</h7>
                    <input type="text" name="namaPersonalSubArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Status</h7>
                    <div class="position-relative form-check col-sm-2">
                        <label class="form-check-label">
                            <input name="radioPersonalSubArea" id="status_PersonalSubArea1" type="radio" class="form-check-input" value="1"> Aktif
                        </label>
                    </div>
                    <div class="position-relative form-check">
                        <label class="form-check-label">
                            <input name="radioPersonalSubArea" id="status_PersonalSubArea0" type="radio" class="form-check-input" value="0"> Tidak
                        </label>
                    </div>
                </div><br>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- EDIT -->
<div class="modal fade" id="ModalEditPersonalSubArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Edit Personal Sub Area</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('master_data/updatePersonalSubArea'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Personal Area</h7>
                    <div class="position-relative form-group">
                        <select id="PersonalArea"  type="select" name="selectPersonalSubArea" class="form-control col-12">
                        <?php foreach($personalSubArea as $a){?>
                        <option value="<?php echo $a->kode_personal_area;?>"><?php echo $a->kode_personal_area;?></option><?php }?>  
                    </select></div>              
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kode Sub Area</h7>
                    <input type="text" id="kode_PersonalSubArea" name="kodePersonalSubArea" class="form-control col-8" readonly>
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Nama Sub Area</h7>
                    <input type="text" id="nama_PersonalSubArea" name="namaPersonalSubArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Status</h7>
                    <div class="position-relative form-check col-sm-2">
                        <label class="form-check-label">
                            <input name="radioPersonalSubArea" id="statusPersonalSubArea1" type="radio" class="form-check-input" value="1"> Aktif
                        </label>
                    </div>
                    <div class="position-relative form-check">
                        <label class="form-check-label">
                            <input name="radioPersonalSubArea" id="statusPersonalSubArea0" type="radio" class="form-check-input" value="0"> Tidak
                        </label>
                    </div>
                </div><br>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- HAPUS -->
<div class="modal fade bd-example-modal-sm-personalSubArea" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <form action="<?php echo base_url('master_data/deletePersonalSubArea'); ?>" method="POST">
                    <input type="submit" name="submit" class="btn btn-primary" value="Ya">
                    <input id="delete-personal-Subarea" type="text" name="kode_personal_sub_area" value="id" hidden>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Tidak</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Kelompok Peserta -->
<!-- TAMBAH -->
<div class="modal fade" id="ModalKelompokPeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Tambah Kelompok Peserta</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('master_data/insertKelompokPeserta'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-5 col-form-label">Kode Kelompok Peserta</h7>
                    <input type="text" name="kodeKelompokPeserta" class="form-control col-6">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-5 col-form-label">Nama Kelompok Peserta</h7>
                    <input type="text" name="namaKelompokPeserta" class="form-control col-6">
                </div><br>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- EDIT -->
<div class="modal fade" id="ModalEditKelompokPeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Edit Kelompok Peserta</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('master_data/updateKelompokPeserta'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-5 col-form-label">Kode Kelompok Peserta</h7>
                    <input type="text" id="kode-KelompokPeserta" name="kodeKelompokPeserta" class="form-control col-6" readonly>
                </div><br>
                <div class="row">
                    <h7 class="col-sm-5 col-form-label">Nama Kelompok Peserta</h7>
                    <input type="text" id="nama-KelompokPeserta" name="namaKelompokPeserta" class="form-control col-6">
                </div><br>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- HAPUS -->
<div class="modal fade bd-example-modal-sm-KelompokPeserta" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <form action="<?php echo base_url('master_data/deleteKelompokPeserta'); ?>" method="POST">
                    <input type="submit" name="submit" class="btn btn-primary" value="Ya">
                    <input id="delete-KelompokPeserta" type="text" name="kode_KelompokPeserta" value="id" hidden>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Tidak</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Grup Jenis Peserta -->
<!-- TAMBAH -->
<div class="modal fade" id="ModalGrupJenisPeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Tambah Grup Jenis Peserta</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
                <div class="row">
                    <h7 class="col-sm-5 col-form-label">Kode Grup Jenis Peserta</h7>
                    <input type="text" name="kodeArea" class="form-control col-6">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-5 col-form-label">Nama Grup Jenis Peserta</h7>
                    <input type="text" name="namaArea" class="form-control col-6">
                </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- EDIT -->
<!-- HAPUS -->

<!-- Modal Jenis Peserta -->
<!-- TAMBAH -->
<div class="modal fade" id="ModalJenisPeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Tambah Jenis Peserta</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kode Jenis Peserta</h7>
                    <input type="text" name="kodeArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Nama Jenis Peserta</h7>
                    <input type="text" name="namaArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Grup Jenis Peserta</h7>
                    <div class="position-relative form-group">
                        <select type="select" name="selectGrup" class="custom-select">
                        <option value="">--Pilih Grup Jenis Peserta--</option>
                        <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option>
                        <option>Value 4</option>
                        <option>Value 5</option>
                    </select></div>
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Grup Status Keluarga</h7>
                    <div class="position-relative form-group">
                        <select type="select" name="selectGrup" class="custom-select">
                        <option value="">--Pilih Grup Status Keluarga--</option>
                        <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option>
                        <option>Value 4</option>
                        <option>Value 5</option>
                    </select></div>                
                </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- EDIT -->
<!-- HAPUS -->

<!-- Eye Rule Jenis Peserta -->
<div class="modal fade bd-example-modal-lg-rule" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Rule Jenis Peserta</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
                <table class="mb-0 table table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Detail</th>
                        <th>Kode Trans.</th>
                        <th>Grup Trans.</th>
                        <th>Nama Trans.</th>
                        <th>Status</th>
                        <th>Out ID Jenis Peserta</th>
                        <th>Out Faskes</th>
                        <th>Out Aktif</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Instansi -->
<!-- TAMBAH -->
<div class="modal fade" id="ModalInstansi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Tambah Instansi</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kode Instansi</h7>
                    <input type="text" name="kodeArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Nama Instansi</h7>
                    <input type="text" name="namaArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kelompok Peserta</h7>
                    <div class="position-relative form-group">
                        <select type="select" name="selectGrup" class="custom-select">
                        <option value="">--Pilih Kelompok Peserta--</option>
                        <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option>
                        <option>Value 4</option>
                        <option>Value 5</option>
                    </select></div>
                </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- EDIT -->
<!-- HAPUS -->

<!-- Modal Pekerjaan -->
<!-- TAMBAH -->
<div class="modal fade" id="ModalPekerjaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Tambah Pekerjaan</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kode Pekerjaan</h7>
                    <input type="text" name="kodeArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Nama Pekerjaan</h7>
                    <input type="text" name="namaArea" class="form-control col-8">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Manajer Pekerjaan</h7>
                    <div class="position-relative form-group">
                        <select type="select" name="selectGrup" class="custom-select">
                        <option value="">--Pilih Perusahaan--</option>
                        <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option>
                        <option>Value 4</option>
                        <option>Value 5</option>
                    </select></div>
                </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- EDIT -->
<!-- HAPUS -->

<!-- Modal Role -->
<!-- TAMBAH -->
<div class="modal fade" id="ModalRoleP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Tambah Kelompok Peserta</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('user_manajemen/insertRoleP'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-5 col-form-label">Kode Role</h7>
                    <input type="text" name="kodeRoleP" class="form-control col-6">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-5 col-form-label">Nama Role</h7>
                    <input type="text" name="namaRoleP" class="form-control col-6">
                </div><br>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- EDIT -->
<div class="modal fade" id="ModalEditRoleP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Edit Kelompok Peserta</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('user_manajemen/updateRoleP'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-5 col-form-label">Kode Role</h7>
                    <input type="text" id="kode-RoleP" name="kodeRoleP" class="form-control col-6" readonly>
                </div><br>
                <div class="row">
                    <h7 class="col-sm-5 col-form-label">Nama Role</h7>
                    <input type="text" id="nama-RoleP" name="namaRoleP" class="form-control col-6">
                </div><br>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- HAPUS -->
<div class="modal fade bd-example-modal-sm-RoleP" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <form action="<?php echo base_url('user_manajemen/deleteRoleP'); ?>" method="POST">
                    <input type="submit" name="submit" class="btn btn-primary" value="Ya">
                    <input id="delete-RoleP" type="text" name="kode_RoleP" value="id" hidden>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Tidak</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Data User -->
<!-- TAMBAH -->
<div class="modal fade" id="ModalDataUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Tambah Kelompok Peserta</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('user_manajemen/insertDataUsers'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kode User</h7>
                    <input type="text" name="kodeDataUsers" class="form-control col-6">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Username</h7>
                    <input type="text" name="usernameDataUsers" class="form-control col-6">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Nama User</h7>
                    <input type="text" name="namaDataUsers" class="form-control col-6">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Role / Grup</h7>
                    <div class="position-relative form-group">
                        <select type="select" name="selectRoleDataUsers" class="form-control col-12">
                        <?php foreach($role as $a){?>
                        <option value="<?php echo $a->kode_role;?>"><?php echo $a->nama_role;?></option><?php }?>  
                    </select></div>              
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Area</h7>
                    <div class="position-relative form-group">
                        <select type="select" name="selectAreaDataUsers" class="form-control col-12">
                        <?php foreach($area as $a){?>
                        <option value="<?php echo $a->kode_area;?>"><?php echo $a->nama_area;?></option><?php }?>
                    </select></div>              
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Active</h7>
                    <div class="position-relative form-check col-sm-2">
                        <label class="form-check-label">
                            <input name="radioDataUsers" type="radio" class="form-check-input" value="1"> Aktif
                        </label>
                    </div>
                    <div class="position-relative form-check">
                        <label class="form-check-label">
                            <input name="radioDataUsers" type="radio" class="form-check-input" value="0"> Tidak
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- EDIT -->
<div class="modal fade" id="ModalEditDataUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6495ED;">
                <h5 class="modal-title" id="exampleModalLabel"><font color="white" style="font-weight: bold; ">Edit Kelompok Peserta</font></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3">
            <form action="<?php echo base_url('user_manajemen/updateDataUsers'); ?>" method="POST">
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Kode User</h7>
                    <input type="text" id="kode_DataUsers" name="kodeDataUsers" class="form-control col-6" readonly>
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Username</h7>
                    <input type="text" id="username_DataUsers" name="usernameDataUsers" class="form-control col-6" readonly>
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Nama User</h7>
                    <input type="text" id="nama_DataUsers" name="namaDataUsers" class="form-control col-6">
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Role / Grup</h7>
                    <div class="position-relative form-group">
                        <select type="select" id="role_DataUsers" name="selectRoleDataUsers" class="form-control col-12">
                        <?php foreach($role as $a){?>
                        <option value="<?php echo $a->kode_role;?>"><?php echo $a->nama_role;?></option><?php }?>  
                    </select></div>              
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Area</h7>
                    <div class="position-relative form-group">
                        <select type="select" id="area_DataUsers" name="selectAreaDataUsers" class="form-control col-12">
                        <?php foreach($area as $a){?>
                        <option value="<?php echo $a->kode_area;?>"><?php echo $a->nama_area;?></option><?php }?>
                    </select></div>              
                </div><br>
                <div class="row">
                    <h7 class="col-sm-3 col-form-label">Active</h7>
                    <div class="position-relative form-check col-sm-2">
                        <label class="form-check-label">
                            <input name="radioDataUsers" id="Radio1_DataUsers" type="radio" class="form-check-input" value="1"> Aktif
                        </label>
                    </div>
                    <div class="position-relative form-check">
                        <label class="form-check-label">
                            <input name="radioDataUsers" id="Radio0_DataUsers" type="radio" class="form-check-input" value="0"> Tidak
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- HAPUS -->
<div class="modal fade bd-example-modal-sm-DataUsers" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <form action="<?php echo base_url('user_manajemen/deleteDataUsers'); ?>" method="POST">
                    <input type="submit" name="submit" class="btn btn-primary" value="Ya">
                    <input id="delete-DataUsers" type="text" name="kode_DataUsers" value="id" hidden>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Tidak</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Modules -->
<!-- TAMBAH -->
<!-- EDIT -->
<!-- HAPUS -->