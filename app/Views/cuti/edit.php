
<?=
    view('partials/header.php');
?>
    <div class="container">
        <div class="row">
            <a href="/cuti"><i class="fas fa-arrow-left"></i> Back</a><br><br>
            <h2>Add Leave</h2>
            
            <div class="col-12">
                <?= validation_list_errors() ?>
                <?= form_open("cuti/update/{$cuti['id']}") ?>
                    <div class="form-group">
                        <label for="pegawai_id">Employee</label>
                        <select name="pegawai_id" class="form-control" required>
                            <?php foreach ($pegawai as $employee): ?>
                                <option value="<?= $employee['id'] ?>" <?= ($employee['id'] == $cuti['pegawai_id']) ? 'selected' : '' ?>>
                                    <?= $employee['first_name'] . ' ' . $employee['last_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alasan_cuti">Reason</label>
                        <textarea name="alasan_cuti" class="form-control" required><?= $cuti['alasan_cuti'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_mulai">Start Date</label>
                        <input type="date" name="tanggal_mulai" class="form-control" required value="<?= $cuti['tanggal_mulai'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_selesai">End Date</label>
                        <input type="date" name="tanggal_selesai" class="form-control" required value="<?= $cuti['tanggal_selesai'] ?>">
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