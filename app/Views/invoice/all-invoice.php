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
            <th scope="col">Penerima</th>
            <th scope="col">Status</th>
            <th scope="col">Payment</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Note</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($invoices as $invoice) : ?>
            <tr class="text-center">
              <td class="d-flex justify-content-between">
                <a href="<?= base_url() ?>detail-invoice/<?= $invoice['id'] ?>" class="btn btn-sm btn-success">Detail</a>
                <button type="button" data-id="<?= $invoice['invoice_number'] ?>" class="btn btn-sm btn-danger btn-delete" data-toggle="modal" data-target="#modal-delete">
                  Hapus
                </button>
              </td>
              <td><?= date('Y-m-d', strtotime($invoice['invoice_date'])) ?></td>
              <td>IV.<?= $invoice['invoice_number'] ?>/BMN/<?= date("Y") ?></td>
              <td><?= cutString($invoice['billto']) ?></td>
              <td><a href="<?= base_url() ?>invoice/edit-status/<?= $invoice['id'] ?>" class="<?= ($invoice['status'] == 'NOT PAID') ? 'text-danger' : 'text-success' ?>"><?= $invoice['status'] ?></a></td>
              <td><?= $invoice['payment'] ?></td>
              <td>Rp. <?= number_format($invoice['total_invoice'], 0, '.', '.') ?></td>
              <td><?= $invoice['note'] ?></td>
            </tr>
          <?php endforeach;  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Hapus Invoice</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda Yakin Ingin Menghapus Invoice ?
      </div>
      <div class="modal-footer" id="adelete">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a href="" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>