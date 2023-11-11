<?=
    view('partials/header.php');
?>

<div class="container">
    <div class="row">
        <h2>List Data Admin</h2>
        <div class="col-12">
            <a class="btn btn-md btn-primary" href="/admin/create">Tambah Data <i class="fas fa-plus"></i></a><br><br>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admins as $admin): ?>
                        <tr>
                            <td><?= $admin['id']; ?></td>
                            <td><?= $admin['first_name']; ?></td>
                            <td><?= $admin['last_name']; ?></td>
                            <td><?= $admin['email']; ?></td>
                            <td>
                                <a class="btn btn-md btn-warning" href="/admin/edit/<?= $admin['id']; ?>">Edit <i class="fas fa-edit"></i></a>
                                <a class="btn btn-md btn-danger" href="/admin/delete/<?= $admin['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus <i class="fas fa-trash"></i></a>
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