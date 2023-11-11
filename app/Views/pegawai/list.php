<?=
    view('partials/header.php');
?>

<div class="container">
    <div class="row">
    <h2>List Data Pegawai</h2>
        <div class="col-12">
        <a class="btn btn-md btn-primary" href="/pegawai/create">Tambah Data <i class="fas fa-plus"></i></a><br><br>
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Pegawai</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pegawai as $row) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['first_name'] ?> <?= $row['last_name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone_number'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><?= $row['gender'] ?></td>
                        <td>
                            <a class="btn btn-md btn-warning" href="/pegawai/edit/<?= $row['id']; ?>">Edit <i class="fas fa-edit"></i></a>
                            <a class="btn btn-md btn-danger" href="/pegawai/delete/<?= $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus <i class="fas fa-trash"></i></a>
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