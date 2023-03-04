 <?= $this->extend('layouts/main'); ?>

 <?= $this->section('content'); ?>
 <!-- Begin Page Content -->

 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Invoices</h1>

     <form action="" method="post">
         <div class="row">
             <div class="col-md-8">
                 <div class="form-group">
                     <label for="exampleFormControlTextarea1"><strong>From</strong></label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                 </div>

                 <div class="form-group">
                     <label for="exampleFormControlTextarea1"><strong>Bill To</strong></label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="exampleFormControlInput1"><strong>No. Invoice</strong></label>
                     <input type="text" class="form-control" id="exampleFormControlInput1">
                 </div>
                 <div class="form-group">
                     <label for="exampleFormControlInput1"><strong>Invoice Date</strong></label>
                     <input type="date" class="form-control" id="datetimepicker">
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-6">
                 <p><strong>Description</strong></p>
             </div>
             <div class="col-md-2"><strong>Amount</strong></div>
             <div class="col-md-2"><strong>Tax</strong></div>
             <div class="col-md-2"><strong>Service</strong></div>
         </div>

         <div class="row invoice-description">
             <div class="col-md-6">
                 <div class="form-group">
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                 </div>
             </div>
             <div class="col-md-2">
                 <div class="form-group">
                     <input type="email" class="form-control" id="exampleFormControlInput1">
                 </div>
             </div>
             <div class="col-md-2">
                 <div class="form-group">
                     <input type="email" class="form-control" id="exampleFormControlInput1">
                 </div>
             </div>
             <div class="col-md-2">
                 <div class="form-group">
                     <input type="email" class="form-control" id="exampleFormControlInput1">
                 </div>
             </div>
         </div>
         <div class="row">
             <a href="#" class="btn btn-warning" id="btn-description">Add Description</a>
         </div>
     </form>

 </div>
 <!-- /.container-fluid -->

 <?= $this->endSection(); ?>