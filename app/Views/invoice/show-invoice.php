<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row mb-5">
    <div class="col-9 d-flex justify-content-start">
      <a href="<?= base_url() ?>invoice/all-invoice" class="btn btn-primary">Back</a>
    </div>
    <div class="col-3 d-flex justify-content-end">
      <a href="<?= base_url() ?>invoice/print-invoice/<?= $invoice['id'] ?>" class="btn btn-success">Print To PDF</a>
    </div>
  </div>

  <div class="row text-right">
    <div class="col-md-12">
      <h2><strong>Invoices</strong></h2>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-6 justify-content-start my-auto mx-auto">
      <img src="<?= base_url() ?>images/bmn_logo.png" class="img-fluid w-50" alt="...">
    </div>
    <div class="col-md-6 text-right">
      <p style="white-space: pre-line;"><?= $invoice['from'] ?></p>
    </div>
  </div>
  <hr>
  <div class="row d-flex">
    <div class="col-md-8 justify-content-start">
      <p><strong>PEMBAYARAN KEPADA</strong></p>
      <p style="white-space: pre-line;"><strong><?= $invoice['billto'] ?> </strong></p>
    </div>
    <div class="col-md-4justify-content-end">
      <p><strong>No.Invoice: <?= $invoice_number ?></strong></p>
      <p><strong>Tanggal Invoice: <?= date("Y-m-d", strtotime($invoice['invoice_date'])) ?></strong></p>
      <p><strong>Status: <span class="<?= ($invoice['status'] == 'NOT PAID') ? 'text-danger' : 'text-success' ?>"><?= $invoice['status'] ?></span></strong></p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-12">
      <table class="table">
        <tr class="table-primary text-center">
          <th>Tanggal Pemesanan</th>
          <th>Keterangan</th>
          <th>Pesawat</th>
          <th>Rute</th>
          <th>Booking</th>
          <th>Kuantitas</th>
          <th>Harga</th>
          <th>Jumlah</th>
        </tr>
        <?php foreach ($details as $detail) : ?>
          <tr>
            <td class="text-center"><?= date("Y-m-d", strtotime($detail['detail_date'])) ?></td>
            <td style="white-space: pre-line;"><?= $detail['description'] ?></td>
            <td class="text-center"><?= $detail['flight'] ?></td>
            <td class="text-center"><?= $detail['route'] ?></td>
            <td class="text-center"><?= $detail['booking'] ?></td>
            <td class="text-center"><?= $detail['qty'] ?></td>
            <td class="text-center">Rp. <?= number_format($detail['price'], 0, '.', '.') ?></td>
            <td class="text-center">Rp. <?= number_format($detail['total_details'], 0, '.', '.') ?></td>
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
            <td><strong>Mandiri: </strong>1550011429449</td>
          </tr>
          <tr>
            <td><strong>BRI: </strong>1550011429449</td>
          </tr>
          <tr>
            <td>A/n: Bersama Meniti Nur</td>
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
            <th>Jasa Layanan <?= number_format($invoice['prosentase_service'], 1, '.') ?>%</th>
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