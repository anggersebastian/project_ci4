<?=
    view('partials/header.php');
?>

<div class="container">
    <div class="row">
        <a href="/admin"><i class="fas fa-arrow-left"></i> Back</a><br><br>
        <h2>Edit Admin</h2>
        <div class="container">
            <?= validation_list_errors() ?>
            <?= form_open("admin/update/{$admin['id']}") ?>

                <div class="form-group">
                    <label for="first_name">Nama Depan</label>
                    <input type="text" name="first_name" class="form-control" value="<?= $admin['first_name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Nama Belakang</label>
                    <input type="text" name="last_name" class="form-control" value="<?= $admin['last_name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $admin['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" required>
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