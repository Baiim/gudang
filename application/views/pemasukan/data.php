<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Riwayat Data Pemasukan
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('pemasukan/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Input Pemasukan
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>No Transaksi</th>
                    <th>Tanggal Pemasukan</th>
                    <th>Jumlah Pemasukan</th>
                    <th>Keterangan</th>
                    <th>User</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($pemasukan) :
                    foreach ($pemasukan as $pm) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $bm['tanggal_pemasukan']; ?></td>
                            <td><?= $bm['jumlah_pemasukan']; ?></td>
                            <td><?= $bm['keterangan']; ?></td>
                            <td>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('barangmasuk/delete/') . $bm['id_barang_masuk'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="8" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>