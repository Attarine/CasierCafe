<style>
    th {
        font-size: 14px !important;
        font-weight: bold !important;
        text-align: center !important;
        margin: 0 auto;
        vertical-align: middle !important;
    }

    td {
        font-size: 12px !important;
        font-weight: normal !important;
        text-align: center !important;
    }

    select {
        display: inline-block;
        padding: 4px 6px;
        margin-bottom: 0px !important;
        font-size: 14px;
        line-height: 20px;
        color: #555555;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    label {
        display: inline !important;
        width: 50% !important;
        margin: 0 !important;
        padding: 0 !important;
        vertical-align: middle !important;
    }
</style>

<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <h4 class="page-title mt-3">
                Menu Makanan<small class="text-success h7">&nbsp;Kelola Makanan</small>
            </h4>
            <?= $this->session->flashdata('pesan');
            ?>
            <div class="card bg-transparent border-primary ">
                <div class="card-header bg-primary">
                    <div class="row">
                        <div class="col-md-11">
                            <h4 style="color: white;">Daftar</h4>
                        </div>
                        <div class="col-md-1 float-right">
                            <a href="<?= base_url('menu/tambah'); ?>" class="btn btn-outline-light"><i class="fa fa-plus">&nbsp;Tambah</i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover table-full-width" id="myTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Makanan</th>
                                <th>Harga Makanan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($food)) : ?>
                                <tr>
                                    <td colspan="4" style="text-align: center;">Data Makanan Kosong</td>
                                </tr>
                            <?php else : ?>
                                <?php $no = 1;
                                foreach ($food as $val) :

                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $val['food_name']; ?></td>
                                        <td><?= konversi_uang($val['food_price']); ?></td>
                                        <td>
                                            <a href="<?= base_url('menu/hapus/'); ?><?= $val['food_id']; ?>" onclick="return confirm('Yakin ingin Menghapus?')" class="btn btn-danger btn-sm"><i class="fa fa-trash">&nbsp;Hapus</i></a>
                                            <a href="<?= base_url('menu/ubah/'); ?><?= $val['food_id']; ?>" class="btn btn-primary btn-sm">Ubah</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>