<?=
    view('partials/header.php');
?>

<div class="container">
    <div class="row">
        <a href="/pegawai"><i class="fas fa-arrow-left"></i> Back</a><br><br>
        <h2>Tambah Pegawai</h2>

        <div class="col-12">
            <?= validation_list_errors() ?>
            <?= form_open('pegawai/store') ?>

                <div class="form-group">
                    <label for="first_name">Nama Depan</label>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Nama Belakang</label>
                    <input type="text" name="last_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="number" name="phone_number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea name="address" class="form-control" required></textarea><br>
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select class="form-control" name="gender" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Simpan <i class="fas fa-save"></i></button>
            
            <?= form_close() ?>
        </div>
    </div>
</div>

<?=
    view('partials/footer.php');
?>