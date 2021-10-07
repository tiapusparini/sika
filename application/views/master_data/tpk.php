<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title pt-2">Daftar Master TPK</h5>
                            <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#ModalPekerjaan">Tambah Pekerjaan &#43;</button>    
                        </div>
                        <li class="nav-item-divider nav-item"></li>
                        <div class="d-flex justify-content-start">
                            <input type="text" id="filter-tpk" name="cari" placeholder="Cari.." class="form-control col-3">
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
                        <table class="mb-0 table">
                            <thead>
                            <tr class="text-center">
                                <th>Kode TPK</th>
                                <th>Nama TPK</th>
                                <th>Kota TPK</th>
                                <th>Alamat</th>
                                <th>Area</th>
                                <th>Status TPK</th>
                                <th>Aktif</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="data-tpk">
                            <?php foreach($tpk as $a){?>
                            <tr class="text-center">
                                <td scope="row"><?php echo $a->kode_tpk;?></td>
                                <td><?php echo $a->nama_tpk;?></td>
                                <td><?php echo $a->nama_kota_kantor;?></td>
                                <td><?php echo $a->alamat_tpk;?></td>
                                <td><?php echo $a->nama_area;?></td>
                                <td><?php echo $a->status_tpk;?></td>
                                <td><?php echo $a->status_aktif;?></td>
                                <td>
                                    <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button>
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