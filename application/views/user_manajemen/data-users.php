<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title pt-2">Data Users</h5>
                            <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#ModalDataUsers">Tambah User &#43;</button>    
                        </div>
                        <li class="nav-item-divider nav-item"></li>
                        <div class="d-flex justify-content-start">
                            <input type="text" id="filter-dataUsers" name="cari" placeholder="Cari.." class="form-control col-3">
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
                        <table class="mb-0 table table-hover" id="table-dataUsers">
                            <thead>
                            <tr class="text-center">
                                <th>Kode User</th>
                                <th>Username</th>
                                <th>Nama User</th>
                                <th>Nama Role</th>
                                <th>Nama Area</th>
                                <th>Aktif</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="data-dataUsers">
                            <?php foreach($users as $a){?>
                            <tr class="text-center">
                                <th scope="row"><?php echo $a->kode_user;?></th>
                                <td><?php echo $a->username;?></td>
                                <td><?php echo $a->nama_user;?></td>
                                <td><?php echo $a->nama_role;?></td>
                                <td><?php echo $a->nama_area;?></td>
                                <td><?php echo $a->status_aktif;?></td>
                                <td>
                                    <button class="btn btn-primary edit-button-dataUsers" data-toggle="modal" data-placement="top" title="Edit" data-target="#ModalEditDataUsers"><i class="fas fa-edit edit-button-dataUsers"></i></button>
                                    <button class="btn btn-danger delete-button-dataUsers" data-toggle="modal" data-placement="top" title="Delete" data-target =".bd-example-modal-sm-DataUsers"><i class="fas fa-trash-alt delete-button-dataUsers"></i></button>
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