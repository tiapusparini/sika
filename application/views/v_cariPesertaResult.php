
<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Cari Peserta</h5><li class="nav-item-divider nav-item"></li><br>
                        <form method="POST" action="<?php echo base_url('Transaksi/prosesCariPeserta'); ?>">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Jenis Kepesertaan</label>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="form-control" name="kode_jenis_peserta">
                                            <option></option>
                                            <?php foreach ($jenis_peserta as $jp) {?>
                                            <option value="<?php echo $jp->kode_jenis_peserta; ?>" ><?php echo $jp->nama_jenis_peserta; ?></option>
                                            <?php } ?>
                                        </select>  
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">    
                                    <div class="col-md-3">
                                        <label>NIK</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control" name="nik">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Nomor Peserta</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control" name="no_peserta">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>NAMA</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control" name="nama">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>NIKEP (No.KTP)</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control" name="no_ktp">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>No. BPJS</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control" name="no_bpjs">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Area Pelayanan</label>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="form-control" name="kode_area" id="kode_area">
                                            <option></option>
                                            <?php foreach ($area as $a) {?>
                                            <option value="<?php echo $a->kode_area; ?>" ><?php echo $a->nama_area; ?></option>
                                            <?php } ?>
                                        </select>  
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>TPK</label>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="form-control" name="kode_tpk" id="kode_tpk">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-5">
                                    <button type="submit" class="btn btn-primary" name="btnSubmit">Cari</button>
                                </div>
                            </div>
                            <!-- <button type="reset" class="btn btn-default">Reset Button</button> -->
                        </form>
                        <br>
                        <div class="vertical-table">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>NIKES</th>
                                        <th>Nama</th>
                                        <th>Area</th>
                                        <th>Jenis Peserta</th>
                                        <th>No KTP</th>
                                        <th>No BPJS</th>
                                        <!-- <th>BAND</th> -->
                                        <th>Status Faskes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr class="odd gradeX">
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="center">4</td>
                                        <td class="center">X</td>
                                        <td>Win 95+</td>
                                        <td class="center">4</td>
                                        <td class="center">X</td>
                                    </tr> -->
                                    <?php foreach ($peserta as $p) {?>
                                    <tr class="odd gradeX">
                                        <td><a href="<?php echo base_url('Transaksi/edit_peserta/'); ?><?php echo $p->kode_peserta; ?>"><?php echo $p->nikes; ?></a></td>
                                        <td><?php echo $p->nama; ?></td>
                                        <td><?php echo $p->nama_area; ?></td>
                                        <td><?php echo $p->nama_group_status_keluarga; ?> <?php echo $p->nama_jenis_peserta; ?></td>
                                        <td><?php echo $p->no_ktp; ?></td>
                                        <td><?php echo $p->no_bpjs; ?></td>
                                        <!-- <td><?php echo $p->kode_band_posisi; ?></td> -->
                                        <td><?php if($p->status_faskes == "1"){ echo "Y"; }else{ echo "T";}?></td>
                                        <!-- <td class="center">4</td>
                                        <td class="center">X</td> -->
                                    </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
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
 
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script type="text/javascript">
            $(document).ready(function() {

                $('#kode_area').change(function(){ 
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
                            $('#kode_tpk').html(html);

                        }
                    });
                    return false;
                });

            });
        </script>
</body>
</html>