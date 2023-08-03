<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link href= " <?php echo base_url('asset/css/bootstrap.css')?>" rel = "stylesheet">
</head>
<body>
    <div class="container">
        <h3>Hasil Cek Ongkos Kirim</h3><br>
        <strong>Pengiriman Dari : </strong>
        <?php echo $hasil->rajaongkir->origin_details->city_name?>,
        <?php echo $hasil->rajaongkir->origin_details->province?><br>

        <strong>Tujuan Ke :</strong>
        <?php echo $hasil->rajaongkir->destination_details->city_name?>,
        <?php echo $hasil->rajaongkir->destination_details->province?><br>

        <strong>Mengunakan Jasa Kurir:</strong>
        <?php echo $hasil->rajaongkir->results[0]->name ?><br>

        <strong>Berat Paket: </strong>
        <?php echo $hasil->rajaongkir->query->weight/1000?>Kg<br>

        <strong>Biaya Pengiriman : </strong><br> 
        <?php foreach ($hasil->rajaongkir->results[0]->costs as $biaya) : ?>
            <?php echo $biaya->service ?>:Rp. <?php echo number_format ($biaya->cost[0]->value )?> (<?php echo $biaya->cost[0]->etd?> hari) <br>
        <?php endforeach ?>


    </div>
    
</body>
</html>