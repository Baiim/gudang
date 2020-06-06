<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Input Pemasukan
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('pemasukan') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id_pemasukan' => $id_pemasukan, 'user_id' => $this->session->userdata('login_session')['user']]); ?>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="id_pemasukan">ID Transaksi Pemasukan</label>
                    <div class="col-md-4">
                        <input value="<?= $id_pemasukan; ?>" type="text" readonly="readonly" class="form-control">
                        <?= form_error('id_pemasukan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tanggal_masuk">Tanggal Masuk</label>
                    <div class="col-md-4">
                        <input value="<?= set_value('tanggal_pemasukan', date('Y-m-d')); ?>" name="tanggal_pemasukan" id="tanggal_pemasukan" type="text" class="form-control date" placeholder="Pemasukan...">
                        <?= form_error('tanggal_pemasukan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tanggal_pemasukan">Keterangan</label>
                    <div class="col-md-4">
                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="ex: pembayaran .....">
                    <?= form_error('keterangan', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jumlah_pemasukan">Jumlah Pemasukan</label>
                    <div class="col-md-5">
                        <div class="input-group">
                        <input type="text" class="form-control" id="nominal" name="nominal" placeholder="ex: 100000">
                        </div>
                        <?= form_error('nominal', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col offset-md-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>