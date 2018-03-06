<?php

class Supplier{
	
	private $dbh;

	public function __construct($host,$user,$pass,$db){

		try {

	    $this->dbh = new PDO("mysql:host=".$host.";dbname=".$db,$user,$pass);

		} catch (PDOException $e) {

	    echo 'Connection failed: ' . $e->getMessage();
		
		}

	}

	public function loadSuppliers(){
      $statement = $this->dbh->prepare("SELECT * FROM tbl_Supplier ORDER BY id DESC");
	  $statement->execute();
	  $result = $statement->fetchAll();
	  $output = '';
	  $output .= '
	   <table class="table table-hover">
	    <tr class="info">
	     <th width="5%">#</th>
	     <th width="25%">COMPANY</th>
	     <th width="35%">ADDRESS</th>
	     <th width="20%">PHONE NO.</th>
	     <th width="7%"></th>
	     <th width="8%"></th>
	    </tr>
	  ';
	  if($statement->rowCount() > 0)
	  {
	   foreach($result as $row)
	   {
	    $output .= '
	    <tr>
	     <td>'.$row["id"].'</td>
	     <td>'.$row["cname"].'</td>
	     <td>'.$row["address"].'</td>
	     <td>'.$row["mobile"].'</td>
	     <td><button type="button" id="'.$row["id"].'" class="btn btn-primary btn-xs update">Edit</button></td>
	     <td><button type="button" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button></td>
	    </tr>
	    ';
	   }
	  }
	  else
	  {
	   $output .= '
	    <tr>
	     <td align="center">Data not Found</td>
	    </tr>
	   ';
	  }
	  $output .= '</table>';
	  echo $output;
	}
	
	public function addSuppliers($supplier){
    $statement = $this->dbh->prepare("INSERT INTO tbl_Supplier (cname, address, mobile) VALUES (:cname, :address, :mobile)");
	  $result = $statement->execute(
	   array(
	    ':cname' => $_POST["Company"],
	    ':address' => $_POST["Address"],
	    ':mobile' => $_POST["Mobile"]
	   )
	  );
	  if(!empty($result))
	  {
	   echo 'Data Inserted';
	  }
	}

	public function selectSuppliers($supplier){
    $output = array();
	  $statement = $this->dbh->prepare(
	   "SELECT * FROM tbl_Supplier 
	   WHERE id = '".$_POST["id"]."' 
	   LIMIT 1"
	  );
	  $statement->execute();
	  $result = $statement->fetchAll();
	  foreach($result as $row)
	  {
	   $output["cname"] = $row["cname"];
	   $output["address"] = $row["address"];
	   $output["mobile"] = $row["mobile"];
	  }
	  echo json_encode($output);
	}

public function editSuppliers($supplier){
    $statement = $this->dbh->prepare(
   "UPDATE tbl_Supplier 
   SET cname = :cname, address = :address, mobile = :mobile 
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':cname' => $_POST["Company"],
    ':address' => $_POST["Address"],
    ':mobile' => $_POST["Mobile"],
    ':id'   => $_POST["id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
}


public function deleteSuppliers($supplier){
    $statement = $this->dbh->prepare(
   "DELETE FROM tbl_Supplier WHERE id = :id"
  );
  $result = $statement->execute(
   array(
    ':id' => $_POST["id"]
   )
  );
  if(!empty($result))
  {
   
  }
 
}

//GRN data insertion

public function addGrn($supplier){
    $statement = $this->dbh->prepare("INSERT INTO tbl_Grn (grn_no, supplier, dates) VALUES (:grn_no, :supplier, :dates)");
	  $result = $statement->execute(
	   array(
	    ':grn_no' => $_POST["GrnNo"],
	    ':supplier' => $_POST["Supplier"],
	    ':dates' => $_POST["Dates"]
	   )
	  );
	  if(!empty($result))
	  {
	  
	  }
	}


}



?>
