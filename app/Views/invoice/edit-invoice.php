<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update Invoice</h1>

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
        <div class="col-md-6">
            <form action="<?= base_url() ?>invoice/update-invoice" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="noinv" value="<?= $invoice['id'] ?>">
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">No.Invoice</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $invoice['invoice'] ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tgl.Invoice</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= date("Y-m-d", strtotime($invoice['invoice_date'])) ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Total</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="Rp. <?= number_format($invoice['total_invoice'], 0, '.', '.') ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="status">
                            <option <?= ($invoice['status'] == 'NOT PAID') ? 'selected' : '' ?> value="NOT PAID">NOT PAID</option>
                            <option <?= ($invoice['status'] == 'PAID') ? 'selected' : '' ?> value="PAID">PAID</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-10">
                        <select class="custom-select" id="validationDefault04" name="payment">
                            <option <?= (is_null($invoice['payment']) ? 'selected' : '') ?> value="">Choose</option>
                            <option <?= ($invoice['payment'] == 'CASH') ? 'selected' : '' ?> value="CASH">CASH</option>
                            <option <?= ($invoice['payment'] == 'MANDIRI') ? 'selected' : '' ?> value="MANDIRI">MANDIRI</option>
                            <option <?= ($invoice['payment'] == 'BCA') ? 'selected' : '' ?> value="BCA">BCA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="note"></textarea>
                    </div>
                </div>

                <a href="<?= base_url() ?>invoice/all-invoice" class="btn btn-lg btn-primary">Back</a>
                <button type="submit" class="btn btn-lg btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>