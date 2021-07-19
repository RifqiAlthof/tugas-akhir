<!DOCTYPE html><head>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Cetak</title>
    <link rel="stylesheet" href=" <?= base_url('assets/dist/css/adminlte.min.css'); ?>">
</head>
<body>

    <table class="table table-striped table-bordered">
        <tr class="text-center">
            <th>No</th>
                      <th>RT</th>
                      <th>Nama </th>
                      <th>TTL</th>
                      <th>Status</th>
                      <th>Level</th>
                      <th>Aksi</th>
        </tr>

         <?php $no= 1;
            foreach ($rows as $row) : 
            ?>
            <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row->nama_user ?></td>
                <td><?= $mhs->tanggal_lahir; ?></td>
                <td><?php echo $row->ttl ?></td>
                
                <td>
                    <?php if ($row->status == 1) { ?>
                            <button type="button" class="btn btn-warning"><i class="fa fa-check"> Sudah Memilih</i></button>
                            <?php } else { ?>
                              <button type="button" class="btn btn-danger"><i class="fa fa-pencil"> Belum Memilih</i></button>
                            <?php } ?>
                </td>
                <td><?php echo $row->level ?></td>

            </tr>

        <?php endforeach; ?>
    </table>
</body></html>