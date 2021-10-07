<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title pt-2">Daftar Master Kelompok Peserta</h5>
                            <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#ModalKelompokPeserta">Tambah Kelompok Peserta &#43;</button>    
                        </div>
                        <li class="nav-item-divider nav-item"></li>
                        <div class="d-flex justify-content-start">
                            <input type="text" id="filter-KelompokPeserta" name="cari" placeholder="Cari.." class="form-control col-3">
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
                        <table class="mb-0 table table-hover" id="table-KelompokPeserta">
                            <thead>
                            <tr class="text-center">
                                <th>Kode Kelompok Peserta</th>
                                <th>Nama Kelompok Peserta</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="data-KelompokPeserta">
                            <?php foreach($kelompokPeserta as $a){?>
                            <tr class="text-center">
                                <th scope="row"><?php echo $a->kode_kelompok_peserta;?></th>
                                <td><?php echo $a->nama_kelompok_peserta;?></td>
                                <td>
                                    <button class="btn btn-primary edit-button-KelompokPeserta" data-toggle="modal" data-placement="top" title="Edit" data-target="#ModalEditKelompokPeserta"><i class="fas fa-edit edit-button-KelompokPeserta"></i></button>
                                    <button class="btn btn-danger delete-button-KelompokPeserta" data-toggle="modal" data-placement="top" title="Delete" data-target=".bd-example-modal-sm-KelompokPeserta"><i class="fas fa-trash-alt delete-button-KelompokPeserta"></i></button>
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