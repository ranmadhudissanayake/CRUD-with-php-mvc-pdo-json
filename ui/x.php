<html>
 <head>

  <title>Save GRN</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

  <link href="../notifier/notifier.css" rel="stylesheet" />
  



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
    width:1000px;
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

  <li><a href="../index.php">Home</a></li>
  <li style="color:black;" class="active">Inventory</a></li>
 
</ol>


<div class="container">


  
<div class="jumbotron">
 
<h3 style="color: #3498db;">
  Goods Recieved Note(GRN)
</h3>

<div class="container box">


  <form method="post" id="x">
  <div class="form-group">
   
    <label>Date</label><span class="required">*</span>
    <input type="date" class="form-control" name="dates" id="dates" placeholder="yyyy-mm-dd">
  
  </div>
  <div class="form-group">
    <label>GRN No.</label><span class="required">*</span>
    <input type="text" class="form-control" name="grn_no" id="grn_no">
  </div>
  <div class="form-group">
    <label>Supplier</label><span class="required">*</span>
    <input type="text" class="form-control" name="supplier" id="supplier">
  </div>

  <button type="button" class="btn btn-Success" name="action_grn" id="action_grn">Save GRN</button>
</form>

   </div>
</div>

  
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script> 
  <script src="js/validate1.js"></script>
  <script type="text/javascript" src="../notifier/notifier.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
 </body>

</html>

