<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title pt-2">Daftar Master Kabupaten</h5>
                            <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#ModalPekerjaan">Tambah Pekerjaan &#43;</button>    
                        </div>
                        <li class="nav-item-divider nav-item"></li>
                        <div class="d-flex justify-content-start">
                            <input type="text" id="filter-kabupaten" name="cari" placeholder="Cari.." class="form-control col-3">
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
                                <th>Kode Kabupaten</th>
                                <th>Nama Kabupaten</th>
                                <th>Provinsi</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="data-kabupaten">
                            <?php foreach($kabupaten as $a){?>
                            <tr class="text-center">
                                <td scope="row"><?php echo $a->id;?></td>
                                <td><?php echo $a->kabupaten;?></td>
                                <td><?php echo $a->provinsi;?></td>
                                <td>
                                    <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>                                
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