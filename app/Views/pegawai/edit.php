<?=
    view('partials/header.php');
?>

<div class="container">
    <div class="row">
        <a href="/pegawai"><i class="fas fa-arrow-left"></i> Back</a><br><br>
        <h2>Edit Pegawai</h2>

        <div class="col-12">
            <?= validation_list_errors() ?>
            <?= form_open("pegawai/update/{$pegawai['id']}") ?>

                <div class="form-group">
                    <label for="first_name">Nama Depan</label>
                    <input type="text" name="first_name" class="form-control" value="<?= $pegawai['first_name'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Nama Belakang</label>
                    <input type="text" name="last_name" class="form-control" value="<?= $pegawai['last_name'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $pegawai['email'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="number" name="phone_number" class="form-control" value="<?= $pegawai['phone_number'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea name="address" class="form-control" required><?= $pegawai['address'] ?></textarea><br>
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select class="form-control" name="gender" required>
                        <option value="Laki-laki" <?= $pegawai['gender'] === 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                        <option value="Perempuan" <?= $pegawai['gender'] === 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Simpan <i class="fas fa-save"></i></button>
                <br>
            <?= form_close() ?>
        </div>
    </div>
</div>

<?=
    view('partials/footer.php');
?>
