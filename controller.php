<?php

function __autoload($className){
	
	include_once("model/$className.php");
}

$suppliers = new Supplier("localhost", "root", "", "myProject1");


if(!isset($_POST['action'])){
	
	print json_encode(0);
	return;

}
switch($_POST['action']){

	case 'Load':

	print_r($suppliers->loadSuppliers());
   
	break;

	case 'Save':
   $supplier = new stdClass;
    print $suppliers->addSuppliers($supplier);
	break;

	case 'Select':
   $supplier = new stdClass;
    print $suppliers->selectSuppliers($supplier);
	break;

	case 'Update':
    $supplier = new stdClass;
    print $suppliers->editSuppliers($supplier);
	break;

	case 'Delete':
   $supplier = new stdClass;
    print $suppliers->deleteSuppliers($supplier);
	break;

	case 'Save GRN':
   	$supplier = new stdClass;
    print $suppliers->addGrn($supplier);
	break;



}

exit();


?>