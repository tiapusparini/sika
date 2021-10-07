
<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Print Barcode Kartu Peserta</h5><li class="nav-item-divider nav-item"></li><br>
                        <?php if (isset($failed)): ?>
                          <p style="text-align: center; color: red"><?php echo $failed ?></p>
                          <br>
                        <?php endif; ?>
                        <form action="<?php echo base_url('welcome/cari_print'); ?>" method="POST">
                            <div class="form-row">
                                <label for="exampleEmail11" class="ml-1">NIKES</label>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <input name="nikes" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <input type="submit" name="submit" class=" ml-1 btn btn-primary" value="Cari"></input>
                                </div> 
                                </form>                                            
                                <div class="position-relative form-group">
                                    <form action="<?php echo base_url('printPage/printKartu');?>" method="POST" target="_BLANK">
                                        <input class="ml-1 btn btn-danger" type="submit" value="Print Kartu">
                                </div>
                            </div>
                        <!-- HASIL -->
                        <?php 
                            if(isset($print[0]->gol_darah)){ 
                        ?>
                        <input name="printNikes" type="text" value="<?php echo $print[0]->nikes;?>" hidden></form>
                        <div class="row ml-1 mr-1" style="height:600px; width:950px; background-image: url('<?php echo base_url() ?>../assets/images/bg_kartu_pensiun.png');">
                            <div class="col-md-11 mt-4 ml-4" >
                                <div class="text-right">
                                    <img src="<?php echo base_url() ?>../assets/images/no_image.png" alt="" width="20%" class="mt-5">
                                    <h4 class="modal-title"><font color="white" style="font-weight: bold; text-transform: uppercase;">Gol. Darah : <?php echo $print[0]->gol_darah;?></font></h4>
                                </div>
                            </div>
                            <div class="col-sm-7 mt-5 mb-2">
                                <h1 class="modal-title ml-3"><font color="white" style="font-weight: bold; text-transform: uppercase;"><?php echo $print[0]->nikes;?></font></h1>
                                <h2 class="modal-title ml-3"><font color="white" style="font-weight: bold; text-transform: uppercase;"><?php echo $print[0]->nama;?></font></h2>
                                <h3 class="modal-title ml-3"><font color="white" style="font-weight: bold; text-transform: uppercase;">BAND POSISI : <?php echo $print[0]->nama_band;?></font></h3>
                                <h3 class="modal-title ml-3"><font color="white" style="font-weight: bold; text-transform: uppercase;"><?php echo $print[0]->nama_tpk;?></font></h3>
                                <h3 class="modal-title ml-3 mb-5"><font color="white" style="font-weight: bold; text-transform: uppercase;">BERLAKU: SEUMUR HIDUP</font></h3>
                            </div>
                            <div class="col-sm-4 mt-1 ml-3 mb-2 text-right">
                                <img src="<?php echo base_url() ?>../assets/images/barcode1.png" alt="" class="mt-5 mr-1">
                                <img src="<?php echo base_url() ?>../assets/images/barcode2.png" alt="" class="mt-3 mb-5">
                            </div>
                        </div>
                        <?php 
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