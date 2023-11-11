<?=
    view('partials/header.php');
?>

<div class="container">
    <div class="row">
    <h2>List Data Cuti Pegawai</h2>
        <div class="col-12">
        <a class="btn btn-md btn-primary" href="/cuti/create">Tambah Data <i class="fas fa-plus"></i></a><br><br>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Employee</th>
                        <th>Reason</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($cuti as $leave): ?>
                    <tr>
                        <td><?= $leave['id'] ?></td>
                        <td><?= $leave['first_name'] . ' ' . $leave['last_name'] ?></td>
                        <td><?= $leave['alasan_cuti'] ?></td>
                        <td><?= $leave['tanggal_mulai'] ?></td>
                        <td><?= $leave['tanggal_selesai'] ?></td>
                        <td>
                            <a href="<?= base_url("/cuti/edit/{$leave['id']}") ?>" class="btn btn-warning">Edit <i class="fas fa-edit"></i></a>
                            <a href="<?= base_url("/cuti/delete/{$leave['id']}") ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    

    </div>
</div>

<?=
    view('partials/footer.php');
?>