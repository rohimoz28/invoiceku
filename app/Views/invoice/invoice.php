 <?= $this->extend('layouts/main'); ?>

 <?= $this->section('content'); ?>
 <!-- Begin Page Content -->

 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Invoices</h1>

     <form action="/invoice/print-invoice" method="post">
         <div class="row">
             <div class="col-md-8">
                 <div class="form-group">
                     <label for="exampleFormControlTextarea1"><strong>From</strong></label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="from" rows="3"></textarea>
                 </div>

                 <div class="form-group">
                     <label for="exampleFormControlTextarea1"><strong>Bill To</strong></label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="billto" rows="3"></textarea>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="exampleFormControlInput1"><strong>No. Invoice</strong></label>
                     <input type="text" class="form-control noinv" id="exampleFormControlInput1" name="noinv">
                 </div>
                 <div class="form-group">
                     <label for="exampleFormControlInput1"><strong>Invoice Date</strong></label>
                     <input type="date" class="form-control" id="datetimepicker" name="dateinv">
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-3">
                 <p><strong>Description</strong></p>
             </div>
             <div class="col-md-2"><strong>Flight</strong></div>
             <div class="col-md-2"><strong>Booking</strong></div>
             <div class="col-md-1"><strong>QTY</strong></div>
             <div class="col-md-2"><strong>Price</strong></div>
             <div class="col-md-2"><strong>Total</strong></div>
         </div>

         <div class="row invoice-description">
             <input type="hidden" name="invdetail[]" class="invdetail">
             <div class="col-md-3">
                 <div class="form-group">
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="description[]" rows="3"></textarea>
                 </div>
             </div>
             <div class="col-md-2">
                 <div class="form-group">
                     <input type="text" class="form-control" id="exampleFormControlInput1" name="flight[]">
                 </div>
             </div>
             <div class="col-md-2">
                 <div class="form-group">
                     <input type="text" class="form-control" id="exampleFormControlInput1" name="booking[]">
                 </div>
             </div>
             <div class="col-md-1">
                 <div class="form-group">
                     <input type="text" class="form-control" id="exampleFormControlInput1" name="qty[]">
                 </div>
             </div>
             <div class="col-md-2">
                 <div class="form-group">
                     <input type="text" class="form-control" id="exampleFormControlInput1" name="price[]">
                 </div>
             </div>
             <div class="col-md-2">
                 <div class="form-group">
                     <input type="text" class="form-control" id="exampleFormControlInput1" name="total[]">
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
         </div>
         <div class="row">
             <button class="btn btn-primary btn-lg ml-2">Submit Invoice</button>
         </div>
     </form>

 </div>
 <!-- /.container-fluid -->

 <?= $this->endSection(); ?>