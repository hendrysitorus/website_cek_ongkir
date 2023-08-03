<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Ongkos Kirim</title>
    <link href= " <?php echo base_url('asset/css/bootstrap.css')?>" rel = "stylesheet">
</head>
<body>
    <div class="container">
    <h2>Mencek Ongkos Kirim</h2>
     
    <form>

        <div class="form-group">
        <label">Pilih Asal Kota </label>
            <select class="form-control">
                <option>Pilih Kota</option>
            </select>
        </div>

        <div class="form-group">
        <label">Pilih Tujuan Kota </label>
            <select class="form-control">
                <option>Pilih Kota</option>
            </select>
        </div>

        <div class="form-group">
        <label">Berat Paket</label>
        <input type="text" name="berat" class="form-control">
        </div>

        <div class="form-group">
        <label">Pilih Jenis Kurir </label>
            <select class="form-control">
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