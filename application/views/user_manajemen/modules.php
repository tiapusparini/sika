<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title pt-2">Setting Modules</h5>
                            <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#ModalModules">Tambah Module &#43;</button>    
                        </div>
                        <li class="nav-item-divider nav-item"></li>
                        <div class="d-flex justify-content-start">
                            <input type="text" id="filter-Modules" name="cari" placeholder="Cari.." class="form-control col-3">
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
                        <table class="mb-0 table table-hover" id="table-Modules">
                            <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Parent ID</th>
                                <th>Title</th>
                                <th>URL</th>
                                <th>Icon</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="data-Modules">
                            <?php foreach($modules as $a){?>
                            <tr class="text-center">
                                <th scope="row"><?php echo $a->kode_module;?></th>
                                <td><?php echo $a->kode_parent_modul;?></td>
                                <td><?php echo $a->nama_module;?></td>
                                <td><?php echo $a->url;?></td>
                                <td></td>
                                <td><?php echo $a->order;?></td>
                                <td><?php echo $a->status_aktif;?></td>

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