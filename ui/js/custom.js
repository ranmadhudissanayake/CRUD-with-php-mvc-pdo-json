$(document).ready(function(){
 fetchUser();
 function fetchUser() 
 {
  var action = "Load";
  $.ajax({
   url : "http://localhost/crud_5/controller.php", 
   method:"POST", 
   data:{action:action}, 
   success:function(data){
    $('#result').html(data); 
   }
  });
 }

 
 $('#modal_button').click(function(){
  $('#supplierModal').modal('show'); 
  $('#cname').val(''); 
  $('#address').val(''); 
  $('#mobile').val('');
  $('.modal-title').text("Supplier Setup"); 
  $('#action').val('Save');
 });

 
 $('#action').click(function(){
  var Company = $('#cname').val(); 
  var Address = $('#address').val(); 
  var Mobile = $('#mobile').val();
  var id = $('#supplier_id').val();  
  var action = $('#action').val();  
  if(Company != '' && Address != '' && Mobile != '') 
  {
   $.ajax({
    url : "controller.php",    
    method:"POST",    
    data:{Company:Company, Address:Address, Mobile:Mobile, id:id, action:action}, 
    success:function(data){ 
     $('#supplierModal').modal('hide'); 
     fetchUser();    
     $.notifier('success','Success','Data Inserted','10000');
    }
   });
  }
  else
  {

        $.notifier('danger','Required','All the field must be filled','10000');

  }
  return false;
 });

 
 $(document).on('click', '.update', function(){
  var id = $(this).attr("id"); 
  var action = "Select";   
  $.ajax({
   url:"controller.php",   
   method:"POST",    
   data:{id:id, action:action},
   dataType:"json",   
   success:function(data){
    $('#supplierModal').modal('show');   
    $('.modal-title').text("Update Records"); 
    $('#action').val("Update");     
    $('#supplier_id').val(id);     
    $('#cname').val(data.cname);  
    $('#address').val(data.address);
    $('#mobile').val(data.mobile);  
   }
  });
 });

 
 $(document).on('click', '.delete', function(){
  var id = $(this).attr("id"); 
 
$.confirm({
    title: 'Confirm!',
    content: 'Are you sure you want to remove this supplier!',
    buttons: {
        confirm: function () {

   var action = "Delete"; 
   $.ajax({
    url:"controller.php",    
    method:"POST",     
    data:{id:id, action:action}, 
    success:function(data)
    {
     fetchUser();    
     $.notifier('reminder','Deleted','Record is deleted from the list','10000')    
    }
   })
      },
        cancel: function () {
            $.alert('Canceled!');
        }

    }

});
  
 });


//phone number validation code

jQuery(document).ready(function($){
    $cf = $('#mobile');
    $cf.blur(function(e){
        phone = $(this).val();
        phone = phone.replace(/[^0-9]/g,'');
        if (phone.length != 10)
        {
            
            $('#mobile').val('');
             $('#mobile').focus();
        }
    });
});




 $('#action_grn').click(function(){

// console.log($('#supplier').val());


  var Dates = $('#dates').val(); 
  var GrnNo = $('#grn_no').val(); 
  var Supplier = $('#supplier').val();
   var action = $('#action_grn').val(); 


  if(Dates != '' && GrnNo != '' && Supplier != '') 
  {
   $.ajax({

    url : "http://localhost/crud_5/controller.php",    
    method:"POST",    
    data:{Dates:Dates, GrnNo:GrnNo, Supplier:Supplier, action:action}, 
    success:function(data){
      
     $('#dates').val(''); 
     $('#grn_no').val(''); 
     $('#supplier').val('');
      
     $('#action_grn').val('Save GRN'); 
     
     fetchUser();  
     $.notifier('success','Success','Data Inserted','10000');  
    }
   });
  }
  else
  {
   $.notifier('danger','Required','All the field must be filled','10000'); 
  }



 });
    

});