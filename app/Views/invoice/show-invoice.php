<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mb-5">
        <div class="col-9 d-flex justify-content-start">
            <a href="<?= base_url() ?>invoice/all-invoice" class="btn btn-primary">Back</a>
        </div>
        <div class="col-3 d-flex justify-content-end">
            <a href="" class="btn btn-success disabled">Print To PDF</a>
        </div>
    </div>

    <div class="row text-right">
        <div class="col-md-12">
            <h2><strong>Invoices</strong></h2>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6 bg-primary justify-content-start my-auto mx-auto">
            <h2 class="text-danger">LOGO PERUSAHAAN</h2>
        </div>
        <div class="col-md-6 text-right">
            <p><?= $invoice['from'] ?></p>
        </div>
    </div>
    <hr>
    <div class="row d-flex">
        <div class="col-md-8 justify-content-start">
            <p><strong>PEMBAYARAN KEPADA</strong></p>
            <p><strong><?= $invoice['billto'] ?> </strong></p>
        </div>
        <div class="col-md-4justify-content-end">
            <p><strong>No.Invoice: <?= $invoice['invoice'] ?></strong></p>
            <p><strong>Tanggal Invoice: <?= date("Y-m-d", strtotime($invoice['invoice_date'])) ?></strong></p>
            <p><strong>Status: <span class="<?= ($invoice['status'] == 'NOT PAID') ? 'text-danger' : 'text-success' ?>"><?= $invoice['status'] ?></span></strong></p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <table class="table">
                <tr class="table-primary">
                    <th>Tanggal Pemesanan</th>
                    <th>Keterangan</th>
                    <th>Pesawat</th>
                    <th>Booking</th>
                    <th>Kuantitas</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                </tr>
                <?php foreach ($details as $detail) : ?>
                    <tr>
                        <td><?= date("Y-m-d", strtotime($detail['detail_date'])) ?></td>
                        <td><?= $detail['description'] ?></td>
                        <td><?= $detail['flight'] ?></td>
                        <td><?= $detail['booking'] ?></td>
                        <td><?= $detail['qty'] ?></td>
                        <td>Rp. <?= number_format($detail['price'], 0, '.', '.') ?></td>
                        <td>Rp. <?= number_format($detail['total_details'], 0, '.', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <h5><strong>Instruksi Pembayaran</strong></h5>
            <table class="table table-sm table-borderless">
                <tbody>
                    <tr>
                        <th>Mandiri: </th>
                        <td>165465465</td>
                    </tr>
                    <tr>
                        <th>BCA: </th>
                        <td>56465465465</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-sm table-borderless">
                <tbody>
                    <tr>
                        <th>Total</th>
                        <td>Rp. <?= number_format($invoice['total_invoice'], 0, '.', '.') ?></td>
                    </tr>
                    <tr>
                        <th>Jasa Layanan 5%</th>
                        <td>Rp. <?= number_format($service, 0, '.', '.') ?></td>
                    </tr>
                    <tr>
                        <th>PPN 11%</th>
                        <td>Rp. <?= number_format($ppn, 0, '.', '.') ?></td>
                    </tr>
                    <tr>
                        <th><strong>TOTAL DIBAYAR </strong></th>
                        <td><strong>Rp. <?= number_format($total, 0, '.', '.') ?></strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>