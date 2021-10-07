
<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Cek Hak Kelas Rawat Rumah Sakit</h5><li class="nav-item-divider nav-item"></li><br>
                        <?php if (isset($failed)): ?>
                          <p style="text-align: center; color: red"><?php echo $failed ?></p>
                          <br>
                        <?php endif; ?>
                        <form action="<?php echo base_url('welcome/cari_print'); ?>" method="POST">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label for="exampleEmail11" class="ml-1">Filter Band :</label>
                                    <div class="position-relative form-group">
                                        <select type="select" id="inputBandFilter" name="selectFilterBand" class="form-control col-12">
                                        <option value="">--Pilih Band--</option>
                                        <?php foreach($band as $a){?>
                                        <option value="<?php echo $a->nama_band;?>"><?php echo $a->nama_band;?></option>
                                        <?php } ?>
                                    </select></div> 
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleEmail11" class="ml-1">Area :</label>
                                    <div class="position-relative form-group">
                                        <select type="select" id="inputAreaFilter" name="selectArea" class="form-control col-12">
                                        <option value="">--NASIONAL--</option>
                                        <?php foreach($area as $a){ if($a->nama_area != 'NASIONAL'){?>
                                        <option value="<?php echo $a->nama_area;?>"><?php echo $a->nama_area;?></option>
                                        <?php }} ?> 
                                    </select></div> 
                                </div>
                            </div><li class="nav-item-divider nav-item"></li><br>
                        <form action="">
                        <div class="d-flex justify-content-start">
                            <input id="inputFilterType" type="text" id="filter-cekHak" name="cari" placeholder="Cari.." class="form-control col-3">
                        </div>
                        </form><br><br>
                        <div class="vertical-table">
                            <table class="mb-0 table" id="table-PersonalArea">
                                <thead>
                                <tr class="text-center">
                                    <th>Area</th>
                                    <th>Nama Band</th>
                                    <th>Hak Kelas</th>
                                    <th>Nama RS</th>
                                    <th>Kota</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody id="UItableCekHak"><?php foreach($kelas as $a){?>
                                <tr>
                                    <td class="text-center"><?php echo $a->nama_area;?></td>
                                    <td class="text-center"><?php echo $a->nama_band;?></td>
                                    <td class="text-center"><?php echo $a->hak_kelas;?></td>
                                    <td class="text-center"><?php echo $a->nama_rs;?></td>
                                    <td class="text-center"><?php echo $a->nama_kota_kantor;?></td>
                                    <td class="text-center"><?php echo $a->nama_group_jenis_peserta;?></td>
                                    <?php } ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                            
                        </form>
                        <!-- HASIL -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>