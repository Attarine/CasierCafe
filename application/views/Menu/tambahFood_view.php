<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <h4 class="page-title mt-3">
                Tambah Makanan
            </h4>
            <div class="card bg-transparent border-primary">
                <div class="card-header bg-primary">
                    <div class="row">
                        <div class="col-md-11">
                            <h4 style="color: white;">Tambah</h4>
                        </div>
                        <div class="col-md-1 float-right">
                            <a href="<?= base_url('menu/food'); ?>" class="btn btn-outline-light"><i class="fa fa-plus">&nbsp;Kembali</i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6 form-outline mb-4">
                                <label for="">Nama Makanan</label>
                                <input type="text" name="food_name" class="form-control" autocomplete="off" />
                                <?= form_error('food_name', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-6 form-outline mb-4">
                                <label for="">Harga Makanan</label>
                                <input type="text" name="food_price" class="form-control" autocomplete="off" />
                                <?= form_error('food_price', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-end">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>