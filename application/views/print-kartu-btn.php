<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>SIKA-YAKES TELKOM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <style type="text/css">
		.vertical-table {
            height: 400px;
            overflow-y: auto;
            overflow-x: auto;
            width: 100%;
		}
    </style>
    <link href="<?php echo base_url().'../main.css'; ?>" rel="stylesheet">
    
</head>
<body>
    <div class="col-md-9"><br>
        <?php if (isset($failed)): ?>
            <p style="text-align: center; color: red"><?php echo $failed ?></p><br>
        <?php endif; ?>
        <?php 
            if(isset($print[0]->gol_darah)){ 
        ?>
        <div class="row ml-1" style="height:600px; width:950px; background-image: url('<?php echo base_url() ?>../assets/images/bg_kartu_pensiun.png'); -webkit-print-color-adjust: exact;">
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
<script>
	window.print();
</script>
</body>
