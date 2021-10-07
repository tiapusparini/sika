
<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Anak</h5><li class="nav-item-divider nav-item"></li><br>
                        <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($this->session->flashdata('danger')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata('danger'); ?>
                        </div>
                        <?php endif; ?>
                        
                    
                        <form method="POST" action="<?php echo base_url('Transaksi/prosesInputKepalaKeluarga'); ?>" enctype="multipart/form-data" >
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="<?php echo base_url('../upload/image/') ?>default.jpg" width="200" />
                                        <input class="form-control" type="file" name="foto">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <p class="text-right"><label>No. Peserta</label></p>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" name="no_peserta">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">    
                                    <div class="col-lg-2">
                                        <p class="text-right"><label>Kelompok Trans *</label></p>
                                    </div>
                                    <div class="col-lg-3">
                                        <select class="form-control" name="kode_kelompok_transaksi" id="kode_kelompok_transaksi" required="">
                                            <option></option>
                                            <?php foreach ($result as $hasil) {?>
                                            <option value="<?php echo $hasil->kode_kelompok_transaksi; ?>" ><?php echo $hasil->nama_kelompok_transaksi; ?></option>
                                            <?php } ?>
                                            <!-- <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option> -->
                                        </select>  
                                    </div>
                                    <div class="col-lg-2">
                                        <p class="text-right"><label>Id Jenis Peserta</label></p>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" name="kode_jenis_peserta" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <p class="text-right"><label>Jenis Transaksi *</label></p>
                                    </div>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="kode_jenis_transaksi" id="kode_jenis_transaksi" required="">
                                            <option></option>
                                            <!-- <?php foreach ($jenis_transaksi as $jt) {?>
                                            <option value="<?php echo $jt->kode_jenis_transaksi; ?>" ><?php echo $jt->nama_jenis_transaksi; ?></option>
                                            <?php } ?> -->
                                            <!-- <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option> -->
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item"><a href="#dataPribadi" data-toggle="tab" class="active nav-link">Data Pribadi</a>
                                </li>
                                <li class="nav-item"><a href="#infoLainLain" data-toggle="tab" class="nav-link">Info Lain-lain</a>
                                </li>
                                <li class="nav-item"><a href="#dataPendukung" data-toggle="tab" class="nav-link">Data Pendukung</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="dataPribadi">
                                    <div class="form-group">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>NIK *</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                            <input class="form-control" name="nik" required="">
                                            </div>
                                            <div class="col-lg-3">
                                                <p class="text-right"><label>NIKES</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                            <input class="form-control" name="nikes">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Nama Anak *</label></p>
                                            </div>
                                            <div class="col-lg-4">
                                                <input class="form-control" name="nama" required="">
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Anak Ke *</label></p>
                                            </div>
                                            <div class="col-lg-1">
                                                <input class="form-control" name="anak_ke" required="">
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Istri/Suami Ke *</label></p>
                                            </div>
                                            <div class="col-lg-1">
                                                <input class="form-control" name="pasangan_ke" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Tempat, Tanggal Lahir *</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                            <input class="form-control" name="tempat_lahir" required="">
                                            </div>
                                            <div class="col-lg-2">
                                            <input class="form-control" type="date" name="tanggal_lahir" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Jenis Kelamin *</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <label class="radio-inline">
                                                    <input type="radio" name="jenis_kelamin" id="optionsRadiosInline1" value="Laki-laki" required="">Laki-laki
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="jenis_kelamin" id="optionsRadiosInline2" value="Perempuan" required="">Perempuan
                                                </label>
                                            </div>
                                            <div class="col-lg-3">
                                                <p class="text-right"><label>Golongan Darah</label></p>
                                            </div>
                                            <div class="col-lg-1">
                                                <select class="form-control" name="golongan_darah">
                                                    <option>O</option>
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>AB</option>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Rhesus</label></p>
                                            </div>
                                            <div class="col-lg-1">
                                                <select class="form-control" name="rhesus">
                                                    <option>+</option>
                                                    <option>-</option>
                                                </select>  
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Agama</label></p>
                                            </div>
                                            <div class="col-lg-3">
                                                <select class="form-control" name="agama">
                                                    <option></option>
                                                    <option value="ISLAM">ISLAM</option>
                                                    <option value="KRISTEN KATOLIK">KRISTEN KATOLIK</option>
                                                    <option value="KRISTEN PROTEST">KRISTEN PROTEST</option>
                                                    <option value="HINDU">HINDU</option>
                                                    <option value="BUDHA">BUDHA</option>
                                                </select>   
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>No. KTP</label></p>
                                            </div>
                                            <div class="col-lg-3">
                                            <input class="form-control" name="no_ktp">
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>No. BPJS</label></p>
                                            </div>
                                            <div class="col-lg-3">
                                            <input class="form-control" name="no_bpjs">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Area Pelayanan *</label></p>
                                            </div>
                                            <div class="col-lg-3">
                                                <select class="form-control" name="area_pelayanan" id="area_pelayanan" required="">
                                                    <option></option>
                                                    <?php foreach ($area as $ap) { if($ap->kode_area != 0){?>
                                                    <option value="<?php echo $ap->kode_area; ?>" ><?php echo $ap->nama_area; ?></option>
                                                    <?php }} ?>
                                                </select>  
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>TPK *</label></p>
                                            </div>
                                            <div class="col-lg-3">
                                                <select class="form-control" name="tpk" id="tpk" required="">
                                                    <option></option>
                                                </select>  
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Alamat TPK</label></p>
                                            </div>
                                            <div class="col-lg-4">
                                            <input class="form-control" name="alamat_tpk">
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kota TPK</label></p>
                                            </div>
                                            <div class="col-lg-3">
                                            <input class="form-control" name="kota_tpk">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Status Faskes *</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <label class="radio-inline">
                                                    <input type="radio" name="status_faskes" value="1" required="">Ya
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="status_faskes" value="0" required="">Tidak
                                                </label>
                                            </div>
                                            <div class="col-lg-3">
                                                <p class="text-right"><label>Tgl. Faskes</label></p>
                                            </div>
                                            <div class="col-lg-3">
                                            <input class="form-control" type="date" name="tanggal_faskes">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                </div>
                                
                                <div class="tab-pane fade" id="infoLainLain">
                                    <div class="form-group">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Alamat KTP</label></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="alamat_ktp">
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>RT / RW</label></p>
                                            </div>
                                            <div class="col-lg-1">
                                                <input class="form-control" name="rt_ktp">
                                            </div>
                                            <div class="col-lg-1">
                                                <input class="form-control" name="rw_ktp">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <p class="text-right"><label>Provinsi</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="provinsi_ktp" id="provinsi_ktp">
                                                    <option></option>
                                                    <?php foreach ($provinces as $provinsi) {?>
                                                    <option value="<?php echo $provinsi->id; ?>" ><?php echo $provinsi->name; ?></option>
                                                    <?php } ?>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kota</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="kota_ktp" id="kota_ktp">
                                                    <option></option>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kecamatan</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="kecamatan_ktp" id="kecamatan_ktp">
                                                    <option></option>
                                                </select>  
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <p class="text-right"><label>Kelurahan</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="kelurahan_ktp" id="kelurahan_ktp">
                                                    <option></option>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kode Pos</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="kode_pos_ktp">
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>No. Telp</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="no_telp_ktp">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Alamat Domisili</label></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="alamat_domisili">
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>RT / RW</label></p>
                                            </div>
                                            <div class="col-lg-1">
                                                <input class="form-control" name="rt_domisili">
                                            </div>
                                            <div class="col-lg-1">
                                                <input class="form-control" name="rw_domisili">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <p class="text-right"><label>Provinsi</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="provinsi_domisili" id="provinsi_domisili">
                                                    <option></option>
                                                    <?php foreach ($provinces as $provinsi) {?>
                                                    <option value="<?php echo $provinsi->id; ?>" ><?php echo $provinsi->name; ?></option>
                                                    <?php } ?>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kota</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="kota_domisili" id="kota_domisili">
                                                    <option></option>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kecamatan</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="kecamatan_domisili" id="kecamatan_domisili">
                                                    <option></option>
                                                </select>  
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <p class="text-right"><label>Kelurahan</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="kelurahan_domisili" id="kelurahan_domisili">
                                                    <option></option>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kode Pos</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="kode_pos_domisili">
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>No. Telp</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="no_telp_domisili">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>No. HP</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="no_hp">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Tgl. Meninggal</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" type="date" name="tanggal_meninggal">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Nama Pemilik Rekening</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="nama_pemilik_rekening">
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Nama Bank</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="nama_bank">
                                                    <option></option>
                                                    <?php foreach ($bank as $b) {?>
                                                    <option value="<?php echo $b->kode_bank; ?>" ><?php echo $b->nama_bank; ?></option>
                                                    <?php } ?>
                                                </select> 
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>No. Rekening Bank</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="no_rekening_bank">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Status Kartu</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="status_kartu">
                                                    <option></option>
                                                    <option>BELUM CETAK</option>
                                                    <option>EXPIRED</option>
                                                    <option>SUDAH CETAK</option>
                                                </select> 
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Tgl. Cetak</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" type="date" name="tanggal_cetak">
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Tgl. Akhir Kartu</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" type="date" name="tanggal_akhir_kartu">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Catatan</label></p>
                                            </div>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" rows="3" name="catatan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                </div>
                                <div class="tab-pane" id="dataPendukung" role="tabpanel">
                                    <h5 class="card-title">Upload Dokumen Pendukung</h5>
                                    <div class="form-row">
                                        <table class="mb-0 table table-borderless">
                                            <thead>
                                            <tr>
                                                <th>Nomor Dokumen</th>
                                                <th>Perihal</th>
                                                <th>Tanggal Dokumen</th>
                                                <th>File</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="a" id="a" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="b" id="b" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="c" type="date" id="c" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="file" id="foto" type="file" class="form-control-file">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="d" id="d" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="e" id="e" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="f" type="date" id="f" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="file" id="foto" type="file" class="form-control-file">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="g" id="g" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="h" id="h" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="i" type="date" id="i" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-12">
                                                            <input name="file" id="foto" type="file" class="form-control-file">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                </div>
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-default" name="btn_submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                                        
                    </div>
                 </div>
            </div>
        </div>
    </div>
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

        <script type="text/javascript" src="<?php echo base_url().'../assets/js/jquery-3.3.1.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'../assets/js/bootstrap.js'?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                $('#kode_kelompok_transaksi').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getJenisTransaksiAnak');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].kode_jenis_transaksi+'+'+data[i].kjp+'>'+data[i].njt+'</option>';
                                // html += '<option value='+data[i].kode_jenis_transaksi+'+'+data[i].kode_jenis_peserta+'>'+data[i].kode_jenis_transaksi+'+'+data[i].kjp+'</option>';
                            }
                            $('#kode_jenis_transaksi').html(html);

                        }
                    });
                    return false;
                }); 

                $('#area_pelayanan').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getTPK');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].kode_tpk+'>'+data[i].nama_tpk+'</option>';
                            }
                            $('#tpk').html(html);

                        }
                    });
                    return false;
                }); 

                $('#kelompok_peserta').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getInstansi');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].kode_instansi+'>'+data[i].nama_instansi+'</option>';
                            }
                            $('#perusahaan').html(html);

                        }
                    });
                    return false;
                }); 
                
                $('#divisi').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getBagian');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].kode_bagian+'>'+data[i].nama_bagian+'</option>';
                            }
                            $('#bagian').html(html);

                        }
                    });
                    return false;
                }); 

                $('#band_posisi').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getKlasPosisi');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].nama_band+'+'+data[i].klas_posisi+'>'+data[i].klas_posisi+'</option>';
                            }
                            $('#klas_posisi').html(html);

                        }
                    });
                    return false;
                }); 

                $('#klas_posisi').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getKodeBandPosisi');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].kode_band_posisi+'>'+data[i].kelas_perawatan+'</option>';
                            }
                            $('#kelas_perawatan').html(html);

                        }
                    });
                    return false;
                }); 

                $('#pa').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getPersonalSubArea');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].kode+'>'+data[i].nama_personal_sub_area+'</option>';
                            }
                            $('#psa').html(html);

                        }
                    });
                    return false;
                }); 

                $('#provinsi_ktp').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getRegencies');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].id+'>'+data[i].name+'</option>';
                            }
                            $('#kota_ktp').html(html);

                        }
                    });
                    return false;
                }); 

                $('#kota_ktp').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getDistricts');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].id+'>'+data[i].name+'</option>';
                            }
                            $('#kecamatan_ktp').html(html);

                        }
                    });
                    return false;
                }); 

                $('#kecamatan_ktp').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getVillages');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].id+'>'+data[i].name+'</option>';
                            }
                            $('#kelurahan_ktp').html(html);

                        }
                    });
                    return false;
                }); 

                $('#provinsi_domisili').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getRegencies');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].id+'>'+data[i].name+'</option>';
                            }
                            $('#kota_domisili').html(html);

                        }
                    });
                    return false;
                }); 

                $('#kota_domisili').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getDistricts');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].id+'>'+data[i].name+'</option>';
                            }
                            $('#kecamatan_domisili').html(html);

                        }
                    });
                    return false;
                }); 

                $('#kecamatan_domisili').change(function(){ 
                    var id=$(this).val();
                    $.ajax({
                        url : "<?php echo site_url('Transaksi/getVillages');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].id+'>'+data[i].name+'</option>';
                            }
                            $('#kelurahan_domisili').html(html);

                        }
                    });
                    return false;
                }); 
            });
        </script>
    </body>
</html>
