<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title pt-2">Daftar Master Rule Jenis Peserta</h5>   
                        </div>
                        <li class="nav-item-divider nav-item"></li>
                        <div class="d-flex justify-content-start">
                            <input type="text" id="filter-ruleJenisPeserta" name="cari" placeholder="Cari.." class="form-control col-3">
                        </div> 
                        <div class="d-flex justify-content-end">
                            <button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="Copy"><i class="fas fa-copy"></i></button>
                            <button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="Excel"><i class="fas fa-file-excel"></i></button>
                            <button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="CSV"><i class="fas fa-file-csv"></i></button>
                            <button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="PDF"><i class="fas fa-file-pdf"></i></button>
                            <button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="Print"><i class="fas fa-print"></i></button>
                            <button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="Columns"><i class="fas fa-columns"></i></button>
                        </div> 
                        <div class="vertical-table">
                        <table class="mb-0 table table-hover">
                            <thead>
                            <tr class="text-center">
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Jenis Peserta</th>
                                <th>Kelompok Transaksi</th>
                                <th>Status Aktif</th>
                                <th>Status Nikah</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="data-ruleJenisPeserta">
                            <?php foreach($ruleJenisPeserta as $a){?>
                            <tr class="text-center">
                                <td scope="row"><?php echo $a->kode_rule;?></td>
                                <td><?php echo $a->nama_rule;?></td>
                                <td><?php echo $a->nama_jenis_peserta;?></td>
                                <td>Mark</td>
                                <td><?php echo $a->status_aktif;?></td>
                                <td><?php echo $a->status_nikah;?></td>
                                <td>
                                    <button class="btn btn-light" data-toggle="modal" data-target=".bd-example-modal-lg-rule"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr><?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>