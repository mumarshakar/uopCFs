<?php include("header.php") ?> 

 <div class="container mt-3">

    <div class="row">
        <div class="m-auto">
           <form action="" method="POST">
           	<div class="card">
           		<div class="card-header"><h3>Fill Student Details</h3></div>
           		<div class="card-body">
           	<table class="table table-fluid table-bordered table-hover">
           		<tbody>
           			<tr>
           				<th>First Name</th>
           				<td>
           					<input type="text" name="fn" class="form-control" required>
           				</td>
           				<th>Last Name</th>
           				<td>
           					<input type="text" name="ln" class="form-control" required>
           				</td>
           			</tr>
           			<tr>
           				<th>Role</th>
           				<td>
           					<input type="text" name="rol" class="form-control" required>
           				</td>
           				<th>Group Name</th>
           				<td>
           					<input type="text" name="gpn" class="form-control" required>
           				</td>
           			</tr>
           			<tr>
           				<th>Email</th>
           				<td>
           					<input type="text" name="eml" class="form-control" required>
           				</td>
           				<th>Country</th>
           				<td>
           					<input type="text" name="cntry" class="form-control" required>
           				</td>
           			</tr>
           			<tr>
           				
           				<th>Year</th>
           				<td>
           					<input type="text" name="yr" class="form-control" required>
           				</td>
                     <th>Term</th>
                     <td>
                        <input type="text" name="trm" class="form-control" required>
                     </td>
           			</tr>
           			<tr>
           				
           				<th>Course Name</th>
           				<td>
           					<input type="text" name="crnm" class="form-control" required>
           				</td>
                     <th>Course Code</th>
                     <td>
                        <input type="text" name="crcd" class="form-control" required>
                     </td>
           			</tr>
           		</tbody>
           	</table>
           		</div>
           		<div class="card-footer">
                  <input type="submit" name="svcf" value="Save Classfellow" class="btn btn-primary btn-sm">
               </div>
           	</div>
        	</form>
<?php 
if(isset($_POST['svcf'])){
   $connect = mysqli_connect("localhost",  "root", "", "uopcfs");

   $fn = $_POST['fn'];
   $ln = $_POST['ln'];
   $rol = $_POST['rol'];
   $gpn = $_POST['gpn'];
   $eml = $_POST['eml'];
   $cntry = $_POST['cntry'];
   $yr = $_POST['yr'];
   $trm = $_POST['trm'];
   $crnm = $_POST['crnm'];
   $crcd = $_POST['crcd'];

   if($connect){
      $qry = "INSERT INTO students (fname, lname, role, groupname, emailaddress, country,  year, term, coursename, coursecode) VALUES ('$fn', '$ln', '$rol', '$gpn', '$eml', '$cntry', '$yr', '$trm', '$crnm', '$crcd')";
      
      $qr = mysqli_query($connect, $qry);
      if($qr){
         echo "<tt class='alert alert-success'>Class Fellow Saved Successfully</tt>";
      }
   }else{
      echo "<tt class='alert alert-danger'>Could not Connect to DB</tt>";
   }
}


?>  
        </div>
    </div>
 </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>