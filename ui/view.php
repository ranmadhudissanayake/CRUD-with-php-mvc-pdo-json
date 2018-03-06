<html>
 <head>

  <title>Supplier Menu</title>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script> 
  <script src="ui/js/validate.js"></script>
   
  <link href="notifier/notifier.css" rel="stylesheet" />
  <script type="text/javascript" src="notifier/notifier.js"></script>

  <meta charset="UTF-8">
  <meta name="viewreport" content="width-device-width, initial-scale=1.0">

  <!--<script src="ui/js/bootstrap.min.js"></script>
  <script src="ui/js/bootstrap.js"></script>
  <script src="ui/js/jQuery.js"></script>
  <script src="ui/js/jquery-1.12.0.min.js"></script>
  <link href="ui/css/bootstrap.min.css" rel="stylesheet">
  -->
  <style>

 label.error{
    color: red !important;
    font-weight: normal !important;
  }


  
  .required{
      color:red;
  }

   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:100px;
   }
  </style>
 </head>
 

 <body>


<ol class="breadcrumb">

  <li style="color:black;" class="active">Home</li>
  <li><a href="ui/x.php">Inventory</a></li>
 
</ol>
  



  <div class="container box">
   
    
   <div align="right">
    <button type="button" id="modal_button" class="btn btn-info">Create Records</button>
    
   </div>
   <br />
   <div id="result" class="table-responsive"> 

   </div>
  </div>
 </body>
</html>

<!-- This is supplier Modal. It will be use for Create new Records and Update Existing Records!-->

<div id="supplierModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h3 style="color: #3498db;" class="modal-title">Create/Updade Suppliers</h4>
   </div>
   <div class="modal-body">

    <form id="formname">
    <label>Company</i></label><span class="required">*</span>
    <input type="text" name="cname" id="cname" class="form-control" />
    <br />
    <label>Address</label>
    <input type="text" name="address" id="address" class="form-control" />
    <br />
    <label>Phone No.</label><span class="required">*</span>
    <input type="text" name="mobile" id="mobile" class="form-control" />
    <br />

   </div>
   <div class="modal-footer">
    <input type="hidden" name="supplier_id" id="supplier_id" />
    <input type="submit" name="action" id="action" class="btn btn-success" style="float: left;"/>
    <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left;">Cancel</button>
   </div>
 </form>

  </div>
 </div>
</div>

<script src="ui/js/custom.js"></script>