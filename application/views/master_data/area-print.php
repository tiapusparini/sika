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
<br><div class="app-main__outer">
    <div class="app-main__inner">           
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="card-title pt-2">DAFTAR MASTER AREA</h3>
                        </div>
                        <table class="mb-0 table table-bordered">
                            <thead>
                            <tr class="text-center">
                                <th>Kode Area</th>
                                <th>Nama Area</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($area as $a){?>
                            <tr class="text-center">
                                <th><?php echo $a->kode_area;?></th>
                                <td><?php echo $a->nama_area;?></td>
                            </tr><?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
		window.print();
	</script>