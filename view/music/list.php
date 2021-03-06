<!-- view/music/list.php -->
<?php $judul = 'Daftar Music'
?>
<?php

$id = "";
?>

<?php ob_start()   ?>
<br>
<a href="http://localhost/pdomvc/index.php/music" style="font-size: medium; color:grey;cursor: pointer;">Return</a>
<br>
<br>
<center>
    <h1>Daftar Music</h1>
</center>
<br>

<form action="http://localhost/pdomvc/index.php/music/search?id=<? +$_GET['id'] ?>">
    <div style="margin-bottom: 20px;">
        <input type="text" name="id" value="<?= $id ?>" required />

        <input type="submit" />
    </div>
</form>

<?php echo $id ?>


<div class="table-responsive">

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nama Penyanyi/Artis/Band</th>
            <th>Judul Lagu</th>
            <th>Album</th>
            <th>Tahun</th>
            <th>Detail</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php if ($music[0]) : foreach ($music as $row) : ?>

                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['judul'] ?></td>
                    <td><?= $row['album'] ?></td>
                    <td><?= $row['tahun'] ?></td>
                    <td><a href="http://localhost/pdomvc/index.php/music/detail?id=<?= $row['id'] ?>" class="btn btn-success btn-xs"> Detail</a></td>
                    <td><a href="http://localhost/pdomvc/index.php/music/edit?id=<?= $row['id'] ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
                    <td><a href="http://localhost/pdomvc/index.php/music/delete?id=<?= $row['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-trash"></span> Delete</a></td>
                </tr>
            <?php endforeach;
        else :
            ?>
            <div class="alert alert-danger" role="alert">
                wlh akhoya makhbito alik hi 3awd 9alab
            </div>
        <?php
        endif;
        ?>
    </table>
</div>
<br>
<a href="http://localhost/pdomvc/index.php/music/create" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>