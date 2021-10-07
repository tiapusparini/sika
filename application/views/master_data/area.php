<div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title pt-2">Daftar Master Area</h5>
                            <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#exampleModal">Tambah Area &#43;</button>    
                        </div>
                        <li class="nav-item-divider nav-item"></li>
                        <div class="d-flex">
                            <input id="data-filter" type="text" placeholder="Cari.." class="form-control col-3">
                        </div> 
                        <div class="d-flex justify-content-end">
                            <button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="Copy" onclick="copyText('elementArea')"><i class="fas fa-copy"></i></button>
                            <a href="<?php echo base_url('printPage/printAreaExcel'); ?>" target="_BLANK"><button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="Excel"><i class="fas fa-file-excel"></i></button></a>
                            <a href="<?php echo base_url('printPage/printAreaCSV'); ?>" target="_BLANK"><button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="CSV"><i class="fas fa-file-csv"></i></button></a>
                            <a href="<?php echo base_url('printPage/printAreaPDF'); ?>" target="_BLANK"><button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="PDF"><i class="fas fa-file-pdf"></i></button></a>
                            <a href="<?php echo base_url('printPage/printArea'); ?>" target="_BLANK"><button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="Print"><i class="fas fa-print"></i></button></a>
                            <button class="border-0 btn-transition btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="Columns"><i class="fas fa-columns"></i></button>
                        </div> 
                        <div class="vertical-table">
                        <table class="mb-0 table table-hover" id="table-area">
                            <thead>
                            <tr class="text-center" id="elementArea">
                                <th>Kode Area</th>
                                <th>Nama Area</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="data-area">
                            <?php foreach($area as $a){?>
                            <tr>
                                <th class="text-center"><?php echo $a->kode_area;?></th>
                                <td class="text-center"><?php echo $a->nama_area;?></td>
                                <td class="text-center">
                                    <button class="btn btn-primary target-button" data-toggle="modal" data-placement="top" data-target="#modalEditArea" title="Edit"><i class="fas fa-edit target-button"></i></button>
                                    <button class="btn btn-danger target-button-delete" data-toggle="modal" data-placement="top" data-target=".bd-example-modal-sm-area" title="Delete"><i class="fas fa-trash-alt target-button-delete"></i></button>
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