<!-- ISI -->    
<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Cek Kepesertaan</h5><li class="nav-item-divider nav-item"></li><br>
                        <form action="<?php echo base_url('welcome/cari_kepesertaan'); ?>" method="POST">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label for="exampleEmail11" class="">NIK</label>
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleEmail11" class="">Nama</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="position-relative form-group"><input name="nik" id="exampleEmail11" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group"><input name="nama" id="exampleEmail11" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <input type="submit" value="Cari" name="submit" class="ml-1 btn btn-primary"></input>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row ml-1 mr-1">
                        <?php 
                            if(isset($print[0]->nikes)){
                                foreach($print as $data){ 
                        ?>
                            <div class="col-md-5 mt-2" style="background-color: #DCDCDC;">
                                <div class="row">
                                    <div class="col-md-4">
                                        foto
                                    </div>
                                    <div class="col-md-8">
                                        <table class="mb-0 table">
                                        <tbody>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">nikes</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->nikes;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">nama</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->nama;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">tgl_lahir</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->tgl_lahir;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">umur</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->age;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">alamat</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->alamat;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">kota</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->name;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">status kk</font></h7></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">area</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->nama_area;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">tpk</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->nama_tpk;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">no bpjs</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->no_bpjs;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">no ktp</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->no_ktp;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">status faskes</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->status_faskes;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">hak kelas</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->kelas_perawatan;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">band</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->nama_band;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">klas posisi</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->klas_posisi;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">tgl capeg</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->tgl_capeg;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">tgl mulai kerja</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->tgl_mulai_kerja;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">tgl pensiun</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->tgl_pensiun;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">tgl henti kerja</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->tgl_berhenti_kerja;?></td>
                                            </tr>
                                            <tr>
                                                <td><h7 class="modal-title"><font style="font-weight: bold; text-transform: uppercase;">alasan henti kerja</font></h7></td>
                                                <td>:</td>
                                                <td><?php echo $data->alasan_berhenti_kerja;?></td>
                                            </tr>    
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><div class="col-sm-1"></div>
                            <?php 
                            }
                                } else {
                                    if (!isset($cek)){?>
                            <div class="row ml-1 mr-1">
                                    <h6>Data Tidak Ditemukan.</h6>
                            </div>

                            <?php    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
                    