<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List Invoice</h1>

    <!-- VALIDATATION MESSAGES -->
    <div class="row">
        <div class="col-md-12">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <strong>Success!</strong> <?= session()->getFlashdata('success') ?>
                </div>
            <?php elseif (session()->getFlashdata('error') || session()->getTempdata('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <strong>Error!</strong> <?= (session()->getFlashdata('error')) ? session()->getFlashdata('error') : session()->getTempdata('error') ?>
                </div>
            <?php endif ?>
        </div>
    </div>
    <!-- END VALIDATATION MESSAGES -->


    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Aksi</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Nomer Invoice</th>
                        <th scope="col">Pengirim</th>
                        <th scope="col">Penerima</th>
                        <th scope="col">Status</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Note</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($invoices as $invoice) : ?>
                        <tr class="text-center">
                            <td class="d-flex justify-content-between">
                                <a href="<?= base_url() ?>detail-invoice/<?= $invoice['id'] ?>" class="btn btn-sm btn-success">Detail</a>
                                <a href="<?= base_url() ?>invoice/delete/<?= $invoice['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                            <td><?= date('Y-m-d', strtotime($invoice['invoice_date'])) ?></td>
                            <td><?= $invoice['invoice'] ?></td>
                            <td><?= $invoice['from'] ?></td>
                            <td><?= $invoice['billto'] ?></td>
                            <td><?= $invoice['status'] ?></td>
                            <td>Rp. <?= number_format($invoice['total_invoice'], 0, '.', '.') ?></td>
                            <td><?= $invoice['note'] ?></td>
                        </tr>
                    <?php endforeach;  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>