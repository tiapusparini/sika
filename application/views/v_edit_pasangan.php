
<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Pasangan</h5><li class="nav-item-divider nav-item"></li><br>
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
                        
                        <form method="POST" action="<?php echo base_url('Transaksi/prosesEditPeserta'); ?>" enctype="multipart/form-data" >

                            <input name="kode_peserta" value="<?php foreach ($peserta as $p) {echo $p->kode_peserta;} ?>" hidden>
                            <input name="kode_nik" value="<?php foreach ($peserta as $p) {echo $p->kode_nik;} ?>" hidden>
                            <input name="kode_data_pribadi" value="<?php foreach ($peserta as $p) {echo $p->kode_data_pribadi;} ?>" hidden>
                            <input name="kode_data_tpk" value="<?php foreach ($peserta as $p) {echo $p->kode_data_tpk;} ?>" hidden>
                            <input name="kode_data_kepegawaian" value="<?php foreach ($peserta as $p) {echo $p->kode_data_kepegawaian;} ?>" hidden>
                            <input name="kode_data_info_lain" value="<?php foreach ($peserta as $p) {echo $p->kode_data_info_lain;} ?>" hidden>
                            <input name="kode_data_pendukung" value="<?php foreach ($peserta as $p) {echo $p->kode_data_pendukung;} ?>" hidden>
                            <input name="kode_alamat_ktp" value="<?php foreach ($alamatKTP as $p) {echo $p->kode_alamat;} ?>" hidden>
                            <input name="kode_alamat_domisili" value="<?php foreach ($alamatDomisili as $p) {echo $p->kode_alamat;} ?>" hidden>
                            <input name="kode_data_pernikahan" value="<?php foreach ($peserta as $p) {echo $p->kode_data_pernikahan;} ?>" hidden>
                            <input name="kode_data_bank" value="<?php foreach ($dataBank as $p) {echo $p->kode_data_bank;} ?>" hidden>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="<?php echo base_url('../upload/image/') ?><?php foreach ($peserta as $p) {echo $p->foto;} ?>" width="200" />
                                        <input name="foto_old" value="<?php foreach ($peserta as $p) {echo $p->foto;} ?>" hidden>
                                        <input class="form-control" type="file" name="foto">
                                    </div>
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Anggota Keluarga</label>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <tbody>
                                                    <?php foreach($keluarga as $k){?>
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $k->nama_group_status_keluarga; ?></td>
                                                        <td><a href="<?php echo base_url('Transaksi/edit_peserta/'); ?><?php echo $k->kode_peserta; ?>"><?php echo $k->nikes; ?></a></td>
                                                        <td><?php echo $k->nama; ?></td>
                                                        <td><?php if($k->status_faskes == "1"){ echo "Y"; }else{ echo "T";}?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
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
                                        <!-- <p class="text-right"><label>Id Jenis Peserta</label></p> -->
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" name="kode_jenis_peserta" value="<?php foreach ($peserta as $p) {echo $p->kode_jenis_peserta;} ?>" hidden="">
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
                                <li class="nav-item"><a href="#dataKepegawaian" data-toggle="tab" class="nav-link">Data Kepegawaian</a>
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
                                            <input class="form-control" name="nik" value="<?php foreach ($peserta as $p) {echo $p->nik;} ?>" required="" >
                                            </div>
                                            <div class="col-lg-3">
                                                <p class="text-right"><label>NIKES</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                            <input class="form-control" name="nikes" value="<?php foreach ($peserta as $p) {echo $p->nikes;} ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Nama Pasangan *</label></p>
                                            </div>
                                            <div class="col-lg-4">
                                                <input class="form-control" name="nama" value="<?php foreach ($peserta as $p) {echo $p->nama;} ?>" required="">
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Pasangan Ke *</label></p>
                                            </div>
                                            <div class="col-lg-1">
                                                <input class="form-control" name="pasangan_ke" value="<?php foreach ($peserta as $p) {echo $p->pasangan_ke;} ?>" required="">
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
                                            <input class="form-control" name="tempat_lahir" value="<?php foreach ($peserta as $p) {echo $p->tempat_lahir;} ?>" required="">
                                            </div>
                                            <div class="col-lg-2">
                                            <input class="form-control" type="date" name="tanggal_lahir" value="<?php foreach ($peserta as $p) {echo $p->tgl_lahir;} ?>" required="">
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
                                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php foreach ($peserta as $p) {echo ($p->jenis_kelamin == "Laki-laki")?'checked':'';}?> required="">Laki-laki
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan" <?php foreach ($peserta as $p) {echo ($p->jenis_kelamin == "Perempuan")?'checked':'';}?> required="">Perempuan
                                                </label>
                                            </div>
                                            <div class="col-lg-3">
                                                <p class="text-right"><label>Golongan Darah</label></p>
                                            </div>
                                            <div class="col-lg-1">
                                                <select class="form-control" name="golongan_darah">
                                                    <option></option>
                                                    <option value="O" <?php foreach ($peserta as $p) {echo ($p->gol_darah == "O")?'selected=""':'';}?> >O</option>
                                                    <option value="A" <?php foreach ($peserta as $p) {echo ($p->gol_darah == "A")?'selected=""':'';}?> >A</option>
                                                    <option value="B" <?php foreach ($peserta as $p) {echo ($p->gol_darah == "B")?'selected=""':'';}?> >B</option>
                                                    <option value="AB" <?php foreach ($peserta as $p) {echo ($p->gol_darah == "AB")?'selected=""':'';}?> >AB</option>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Rhesus</label></p>
                                            </div>
                                            <div class="col-lg-1">
                                                <select class="form-control" name="rhesus">
                                                    <option></option>
                                                    <option value="0" <?php foreach ($peserta as $p) {echo ($p->rhesus == "0")?'selected=""':'';}?> >+</option>
                                                    <option value="1" <?php foreach ($peserta as $p) {echo ($p->rhesus == "1")?'selected=""':'';}?> >-</option>
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
                                                    <option value="ISLAM" <?php foreach ($peserta as $p) {echo ($p->agama == "ISLAM")?'selected=""':'';}?> >ISLAM</option>
                                                    <option value="KRISTEN KATOLIK" <?php foreach ($peserta as $p) {echo ($p->agama == "KRISTEN KATOLIK")?'selected=""':'';}?> >KRISTEN KATOLIK</option>
                                                    <option value="KRISTEN PROTEST" <?php foreach ($peserta as $p) {echo ($p->agama == "KRISTEN PROTEST")?'selected=""':'';}?> >KRISTEN PROTEST</option>
                                                    <option value="HINDU" <?php foreach ($peserta as $p) {echo ($p->agama == "HINDU")?'selected=""':'';}?> >HINDU</option>
                                                    <option value="BUDHA" <?php foreach ($peserta as $p) {echo ($p->agama == "BUDHA")?'selected=""':'';}?> >BUDHA</option>
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
                                            <input class="form-control" name="no_ktp" value="<?php foreach ($peserta as $p) {echo $p->no_ktp;} ?>">
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>No. BPJS</label></p>
                                            </div>
                                            <div class="col-lg-3">
                                            <input class="form-control" name="no_bpjs" value="<?php foreach ($peserta as $p) {echo $p->no_bpjs;} ?>">
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
                                                    <?php foreach ($peserta as $p) { ?>
                                                        <?php foreach ($area as $ap) { if($ap->kode_area != 0){?>
                                                        <option value="<?php echo $ap->kode_area; ?>" <?php echo ($p->kode_area == $ap->kode_area)?'selected=""':''?> ><?php echo $ap->nama_area; ?></option>
                                                        <?php }} ?>
                                                    <?php } ?>
                                                </select>  
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>TPK *</label></p>
                                            </div>
                                            <div class="col-lg-3">
                                                <select class="form-control" name="tpk" id="tpk" required="">
                                                    <option></option>
                                                    <?php foreach ($peserta as $p) { ?>
                                                    <option value="<?php echo $p->kode_tpk; ?>" selected="" ><?php echo $p->nama_tpk; ?></option>
                                                    <?php } ?>
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
                                            <input class="form-control" name="alamat_tpk" value="<?php foreach ($peserta as $p) {echo $p->alamat_tpk;} ?>">
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
                                                    <input type="radio" name="status_faskes" value="1" <?php foreach ($peserta as $p) {echo ($p->status_faskes == "1")?'checked':'';}?> required="">Ya
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="status_faskes" value="0" <?php foreach ($peserta as $p) {echo ($p->status_faskes == "0")?'checked':'';}?>required="">Tidak
                                                </label>
                                            </div>
                                            <div class="col-lg-3">
                                                <p class="text-right"><label>Tgl. Faskes</label></p>
                                            </div>
                                            <div class="col-lg-3">
                                            <input class="form-control" type="date" name="tanggal_faskes" value="<?php foreach ($peserta as $p) {echo $p->tgl_faskes;} ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                </div>
                                <div class="tab-pane fade" id="dataKepegawaian">
                                    <div class="form-group">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>NIK YBS</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="nik_ybs" value="<?php foreach ($peserta as $p) {echo $p->nik_ybs;} ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Pendidikan</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="pendidikan">
                                                    <option></option>
                                                    <?php foreach ($peserta as $p) { ?>
                                                        <?php foreach ($pendidikan as $pend) { ?>
                                                        <option value="<?php echo $pend->kode_pendidikan; ?>" <?php echo ($p->kode_pendidikan == $pend->kode_pendidikan)?'selected=""':''?>><?php echo $pend->nama_pendidikan; ?></option>
                                                    <?php }} ?>
                                                </select>  
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Pekerjaan</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="pekerjaan">
                                                    <option></option>
                                                    <option value="PEGAWAI BUMN" <?php foreach ($peserta as $p) {echo ($p->pekerjaan == "PEGAWAI BUMN")?'selected=""':'';}?>>PEGAWAI BUMN</option>
                                                    <option value="PEGAWAI NEGRI" <?php foreach ($peserta as $p) {echo ($p->pekerjaan == "PEGAWAI NEGRI")?'selected=""':'';}?>>PEGAWAI NEGRI</option>
                                                    <option value="PEGAWAI SWASTA" <?php foreach ($peserta as $p) {echo ($p->pekerjaan == "PEGAWAI SWASTA")?'selected=""':'';}?>>PEGAWAI SWASTA</option>
                                                    <option value="WIRASWASTA" <?php foreach ($peserta as $p) {echo ($p->pekerjaan == "WIRASWASTA")?'selected=""':'';}?>>WIRASWASTA</option>
                                                    <option value="TNI" <?php foreach ($peserta as $p) {echo ($p->pekerjaan == "TNI")?'selected=""':'';}?>>TNI</option>
                                                    <option value="POLRI" <?php foreach ($peserta as $p) {echo ($p->pekerjaan == "POLRI")?'selected=""':'';}?>>POLRI</option>
                                                    <option value="GURU" <?php foreach ($peserta as $p) {echo ($p->pekerjaan == "GURU")?'selected=""':'';}?>>GURU</option>
                                                    <option value="IBU RUMAH TANGGA" <?php foreach ($peserta as $p) {echo ($p->pekerjaan == "IBU RUMAH TANGGA")?'selected=""':'';}?>>IBU RUMAH TANGGA</option>
                                                    <option value="LAIN-LAIN" <?php foreach ($peserta as $p) {echo ($p->pekerjaan == "LAIN-LAIN")?'selected=""':'';}?>>LAIN-LAIN</option>
                                                </select>  
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="infoLainLain">
                                    <div class="form-group">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Alamat KTP</label></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="alamat_ktp" value="<?php foreach ($alamatKTP as $aKTP) {  echo $aKTP->alamat;} ?>">
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>RT / RW</label></p>
                                            </div>
                                            <div class="col-lg-1">
                                                <input class="form-control" name="rt_ktp" value="<?php foreach ($alamatKTP as $aKTP) {  echo $aKTP->rt;} ?>">
                                            </div>
                                            <div class="col-lg-1">
                                                <input class="form-control" name="rw_ktp" value="<?php foreach ($alamatKTP as $aKTP) {  echo $aKTP->rw;} ?>">
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
                                                    <!-- <option value="<?php echo $provinsi->id; ?>" ><?php echo $provinsi->name; ?></option> -->
                                                    <?php foreach ($alamatKTP as $aKTP) {?>
                                                        <?php foreach ($provinces as $provinsi) {?>
                                                        <option value="<?php echo $provinsi->id; ?>" <?php echo ($aKTP->kode_provinsi == $provinsi->id)?'selected=""':''?> ><?php echo $provinsi->name; ?></option>
                                                    <?php } } ?>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kota</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="kota_ktp" id="kota_ktp">
                                                    <option></option>
                                                    <?php foreach ($alamatKTP as $aKTP) { ?>
                                                        <?php foreach ($regencies as $reg) { if($aKTP->kode_kabupaten == $reg->id){ ?>
                                                        <option value="<?php echo $reg->id; ?>" selected="" ><?php echo $reg->name; ?></option>
                                                    <?php }}} ?>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kecamatan</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="kecamatan_ktp" id="kecamatan_ktp">
                                                    <option></option>
                                                    <?php foreach ($alamatKTP as $aKTP) { ?>
                                                        <?php foreach ($districts as $dist) { if($aKTP->kode_kecamatan == $dist->id){ ?>
                                                        <option value="<?php echo $dist->id; ?>" selected="" ><?php echo $dist->name; ?></option>
                                                    <?php }}} ?>
                                                </select>  
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
                                                    <?php foreach ($alamatKTP as $aKTP) { ?>
                                                        <?php foreach ($villages as $vil) { if($aKTP->kode_kelurahan == $vil->id){ ?>
                                                        <option value="<?php echo $vil->id; ?>" selected="" ><?php echo $vil->name; ?></option>
                                                    <?php }}} ?>
                                                </select>  
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kode Pos</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="kode_pos_ktp" value="<?php foreach ($alamatKTP as $aKTP) {  echo $aKTP->kode_pos;} ?>" >
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>No. Telp</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="no_telp_ktp" value="<?php foreach ($alamatKTP as $aKTP) {  echo $aKTP->no_telp;} ?>" >
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
                                                <input class="form-control" name="alamat_domisili" value="<?php foreach ($alamatDomisili as $ad) {  echo $ad->alamat;} ?>">
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>RT / RW</label></p>
                                            </div>
                                            <div class="col-lg-1">
                                                <input class="form-control" name="rt_domisili" value="<?php foreach ($alamatDomisili as $ad) {  echo $ad->rt;} ?>">
                                            </div>
                                            <div class="col-lg-1">
                                                <input class="form-control" name="rw_domisili" value="<?php foreach ($alamatDomisili as $ad) {  echo $ad->rw;} ?>">
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
                                                    <?php foreach ($alamatDomisili as $ad) {?>
                                                        <?php foreach ($provinces as $provinsi) {?>
                                                        <option value="<?php echo $provinsi->id; ?>" <?php echo ($ad->kode_provinsi == $provinsi->id)?'selected=""':''?> ><?php echo $provinsi->name; ?></option>
                                                    <?php } } ?>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kota</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="kota_domisili" id="kota_domisili">
                                                    <option></option>
                                                    <?php foreach ($alamatDomisili as $ad) { ?>
                                                        <?php foreach ($regencies as $reg) { if($ad->kode_kabupaten == $reg->id){ ?>
                                                        <option value="<?php echo $reg->id; ?>" selected="" ><?php echo $reg->name; ?></option>
                                                    <?php }}} ?>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kecamatan</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="kecamatan_domisili" id="kecamatan_domisili">
                                                    <option></option>
                                                    <?php foreach ($alamatDomisili as $ad) { ?>
                                                        <?php foreach ($districts as $dist) { if($ad->kode_kecamatan == $dist->id){ ?>
                                                        <option value="<?php echo $dist->id; ?>" selected="" ><?php echo $dist->name; ?></option>
                                                    <?php }}} ?>
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
                                                    <?php foreach ($alamatDomisili as $ad) { ?>
                                                        <?php foreach ($villages as $vil) { if($ad->kode_kelurahan == $vil->id){ ?>
                                                        <option value="<?php echo $vil->id; ?>" selected="" ><?php echo $vil->name; ?></option>
                                                    <?php }}} ?>
                                                </select>  
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>Kode Pos</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="kode_pos_domisili" value="<?php foreach ($alamatDomisili as $ad) {  echo $ad->kode_pos;} ?>">
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="text-right"><label>No. Telp</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="no_telp_domisili" value="<?php foreach ($alamatDomisili as $ad) {  echo $ad->no_telp;} ?>">
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
                                                <input class="form-control" name="no_hp" value="<?php foreach ($peserta as $p) {  echo $p->no_hp;} ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Status Pernikahan *</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="status_pernikahan" required="">
                                                    <option></option>
                                                    <option value="Single" <?php foreach ($peserta as $p) {echo ($p->status_pernikahan == "Single")?'selected=""':'';}?> >Single</option>
                                                    <option value="Menikah" <?php foreach ($peserta as $p) {echo ($p->status_pernikahan == "Menikah")?'selected=""':'';}?> >Menikah</option>
                                                    <option value="Janda" <?php foreach ($peserta as $p) {echo ($p->status_pernikahan == "Janda")?'selected=""':'';}?> >Janda</option>
                                                    <option value="Duda" <?php foreach ($peserta as $p) {echo ($p->status_pernikahan == "Duda")?'selected=""':'';}?> >Duda</option>
                                                </select>  
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Tgl. Pernikahan</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" type="date" name="tanggal_pernikahan" value="<?php foreach ($peserta as $p) {  echo $p->tgl_nikah;} ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Tgl. Perceraian</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" type="date" name="tanggal_perceraian" value="<?php foreach ($peserta as $p) {  echo $p->tgl_cerai;} ?>">
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Tgl. Meninggal</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" type="date" name="tanggal_meninggal" value="<?php foreach ($peserta as $p) {  echo $p->tgl_meninggal;} ?>">
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
                                                <input class="form-control" name="nama_pemilik_rekening" value="<?php foreach ($dataBank as $db) {  echo $db->nama_pemilik_rekening;} ?>">
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Nama Bank</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <select class="form-control" name="nama_bank">
                                                    <option></option>
                                                    <!-- <?php foreach ($bank as $b) {?>
                                                    <option value="<?php echo $b->kode_bank; ?>" ><?php echo $b->nama_bank; ?></option>
                                                    <?php } ?> -->
                                                    <?php foreach ($dataBank as $db) {?>
                                                        <?php foreach ($bank as $b) {?>
                                                        <option value="<?php echo $b->kode_bank; ?>" <?php echo ($db->kode_bank == $b->kode_bank)?'selected=""':''?> ><?php echo $b->nama_bank; ?></option>
                                                    <?php } } ?>
                                                </select> 
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>No. Rekening Bank</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" name="no_rekening_bank" value="<?php foreach ($dataBank as $db) {  echo $db->no_rekening;} ?>">
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
                                                    <option value="BELUM CETAK" <?php foreach ($dataBank as $p) {echo ($p->status_kartu == "BELUM CETAK")?'selected=""':'';}?> >BELUM CETAK</option>
                                                    <option value="EXPIRED" <?php foreach ($dataBank as $p) {echo ($p->status_kartu == "EXPIRED")?'selected=""':'';}?> >EXPIRED</option>
                                                    <option value="SUDAH CETAK" <?php foreach ($dataBank as $p) {echo ($p->status_kartu == "SUDAH CETAK")?'selected=""':'';}?> >SUDAH CETAK</option>
                                                </select> 
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Tgl. Cetak</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" type="date" name="tanggal_cetak" value="<?php foreach ($dataBank as $db) {  echo $db->tgl_cetak;} ?>">
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="text-right"><label>Tgl. Akhir Kartu</label></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" type="date" name="tanggal_akhir_kartu" value="<?php foreach ($dataBank as $db) {  echo $db->tgl_akhir_kartu;} ?>">
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
                                                <textarea class="form-control" rows="3" name="catatan" ><?php foreach ($peserta as $p) {  echo $p->catatan;} ?></textarea>
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
                                    <button type="submit" class="btn btn-primary" name="btn_submit">Simpan</button>
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
                        url : "<?php echo site_url('Transaksi/getJenisTransaksiUpdate');?>",
                        method : "POST",
                        data : {id: id},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                            
                            var html = '';
                            var i;
                            html += '<option value='+''+'>'+''+'</option>';
                            for(i=0; i<data.length; i++){
                                html += '<option value='+data[i].kode_jenis_transaksi+'>'+data[i].nama_jenis_transaksi+'</option>';
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
