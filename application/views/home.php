<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Ongkos Kirim</title>
    <link href= " <?php echo base_url('asset/css/bootstrap.css')?>" rel = "stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
        $('.autosearch').select2();
        });
    </script>


</head>
<body>
    <div class="container">
    <h2>Portal Untuk Cek Ongkos Kirim Se Indonesia</h2>
    <form method="post" action="<?php echo site_url('Main/cekongkir') ?>">
        <div class="form-group">
        <label">Pilih Asal Kota </label>
            <select class="form-control autosearch " name="asal">
                <option>Pilih Kota</option>
                <?php if($kota): ?>
                    <?php foreach ($kota->rajaongkir->results as $kt) :?>
                        <option value="<?php echo $kt->city_id ?>"> <?php echo $kt->city_name ?></option>
                    <?php endforeach ?>
                <?php endif ?>
            </select>
        </div>

        <div class="form-group">
        <label">Pilih Tujuan Kota </label>
            <select class="form-control autosearch " name="tujuan">
                <option>Pilih Kota</option>
                <?php if($kota): ?>
                    <?php foreach ($kota->rajaongkir->results as $kt) :?>
                        <option value="<?php echo $kt->city_id ?>"> <?php echo $kt->city_name ?></option>
                    <?php endforeach ?>
                <?php endif ?>
            </select>
        </div>

        <div class="form-group">
        <label">Berat Paket</label>
        <input type="text" name="berat" class="form-control">
        </div>

        <div class="form-group">
        <label">Pilih Jenis Kurir </label>
            <select class="form-control autosearch" name="kurir">
                <option value="">Pilih Kurir</option>
                <option value="jne">JNE</option>
                <option value="tiki">TIKI</option>
                <option value="pos">POS Indonesia</option>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" value="Cek Ongkir" class="btn btn-primary" name="submit">
        </div>

    </form>

    </div>
    
</body>
</html>