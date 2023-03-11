 <?= $this->extend('layouts/main'); ?>

 <?= $this->section('content'); ?>
 <!-- Begin Page Content -->

 <div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Invoices</h1>

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

   <form action="invoice" method="post">
     <div class="row">
       <div class="col-md-8">
         <div class="form-group">
           <label for="exampleFormControlTextarea1" style="white-space: pre-line;"><strong>From</strong></label>
           <textarea class="form-control" id="exampleFormControlTextarea1" name="from" rows="3"></textarea>
         </div>

         <div class="form-group">
           <label for="exampleFormControlTextarea1" style="white-space: pre-line;"><strong>Bill To</strong></label>
           <textarea class="form-control" id="exampleFormControlTextarea1" name="billto" rows="3"></textarea>
         </div>
       </div>
       <div class="col-md-4">
         <div class="form-group">
           <label for="exampleFormControlInput1"><strong>No. Invoice</strong></label>
           <input type="text" class="form-control noinv" id="exampleFormControlInput1" value="<?= $invoice_number ?>" name="noinv">
         </div>
         <div class="form-group">
           <label for="exampleFormControlInput1"><strong>Invoice Date</strong></label>
           <input type="date" class="form-control" id="datetimepicker" name="dateinv">
         </div>
       </div>
     </div>

     <div class="row mb-1">
       <div class="col-md-3"><strong>Description</strong></div>
       <div class="col-md-1"><strong>Route</strong></div>
       <div class="col-md-2"><strong>Flight</strong></div>
       <div class="col-md-1"><strong>Booking</strong></div>
       <div class="col-md-2"><strong>Date</strong></div>
       <div class="col-md-1"><strong>QTY</strong></div>
       <div class="col-md-2"><strong>Price</strong></div>
     </div>

     <div class="row invoice-description">
       <input type="hidden" name="invdetail[]" class="invdetail">
       <div class="col-md-3">
         <div class="form-group">
           <textarea class="form-control" style="white-space: pre-line;" id="exampleFormControlTextarea1" name="description[]" rows="3"></textarea>
         </div>
       </div>
       <div class="col-md-1">
         <div class="form-group">
           <input type="text" class="form-control" id="exampleFormControlInput1" name="route[]">
         </div>
       </div>
       <div class="col-md-2">
         <div class="form-group">
           <select class="form-control" name="flight[]">
             <option value="0">Choose Option</option>
             <option value="-">None</option>
             <option value="Garuda">Garuda</option>
             <option value="Batik Air">Batik Air</option>
             <option value="Lion Air">Lion Air</option>
             <option value="Super Air Jet">Super Air Jet</option>
             <option value="Citilink">Citilink</option>
             <option value="Pelita Air">Pelita Air</option>
             <option value="Transnusa">Transnusa</option>
           </select>
         </div>
       </div>
       <div class="col-md-1">
         <div class="form-group">
           <input type="text" class="form-control" id="exampleFormControlInput1" name="booking[]">
         </div>
       </div>
       <div class="col-md-2">
         <div class="form-group">
           <input type="date" class="form-control" id="exampleFormControlInput1" name="detail_date[]">
         </div>
       </div>
       <div class="col-md-1">
         <div class="form-group">
           <input type="text" class="form-control" id="qty" name="qty[]">
         </div>
       </div>
       <div class="col-md-2">
         <div class="form-group">
           <input type="text" class="form-control" id="price" name="price[]">
         </div>
       </div>
     </div>
     <div class="row my-3">
       <a href="#" class="btn btn-warning btn-sm ml-3" id="btn-description">Add Description</a>
     </div>
     <div class="row">
       <div class="col-md-6">
         <div class="form-group">
           <label for="exampleFormControlTextarea1"><strong>Terms & Conditions</strong></label>
           <textarea class="form-control" id="exampleFormControlTextarea1" name="term[]" rows="3"></textarea>
         </div>
       </div>
       <div class="col-md-3">
         <div class="form-group">
           <label><strong>Service</strong></label>
           <select class="form-control" name="service">
             <option value="0">Disabled</option>
             <option value="2.5">Enabled (2.5%)</option>
             <option value="5">Enabled (5%)</option>
             <option value="7">Enabled (7%)</option>
             <option value="10">Enabled (10%)</option>
           </select>
         </div>
       </div>
       <div class="col-md-3">
         <div class="form-group">
           <label><strong>Tax</strong></label>
           <select class="form-control" name="tax">
             <option value="0">Disabled</option>
             <option value="11">Enabled (11%)</option>
           </select>
         </div>
       </div>
     </div>
     <div class="row">
       <button type="submit" class="btn btn-primary btn-lg ml-2">Submit Invoice</button>
     </div>
   </form>

 </div>
 <!-- /.container-fluid -->

 <?= $this->endSection(); ?>
