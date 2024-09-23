<?php include("header.php") ?>   
   <!-- Start List Of Class Fellow -->

  <div class="container mt-3">
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h1>Welcome: <?php echo $_SESSION['user_name'] ?></h1>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      
        <div class="card">
          <div class="card-head"></div>
          <div class="card-body">
            <table class="table table-fluid table-bordered table-hover">
          <thead>
            <tr>
              <th>Sr#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Role</th>
              <th>Group</th>
              <th>Email</th>
              <th>Country</th>
            
              <th>Year</th>
              <th>Term</th>
              <th>Course</th>
              <th>Course Code</th>
              <th>Phone</th>
              <th>Previous Course</th>
              <th>Second Country</th>
            </tr>
          </thead>
          <tbody>
<?php  
    $connect = mysqli_connect("localhost",  "root", "", "uopcfs");
    if($connect == true){
      $fetch = mysqli_query($connect, "SELECT * FROM students");
    } 
    while($row = mysqli_fetch_assoc($fetch)){?>
        <tr>
              <td><?php echo $row["stid"] ?></td>
              <td><?php echo $row["fname"] ?></td>
              <td><?php echo $row["lname"] ?></td>
              <td><?php echo $row["role"] ?></td>
              <td><?php echo $row["groupname"] ?></td>
              <td><?php echo $row["emailaddress"] ?></td>
              <td><?php echo $row["country"] ?></td>
              
              <td><?php echo $row["year"] ?></td>
              <td><?php echo $row["term"] ?></td>
              <td><?php echo $row["coursename"] ?></td>
              <td><?php echo $row["coursecode"] ?></td>
              <td></td>
              <td></td>
              
            </tr>
  <?php  }

 ?>
            
            
          </tbody>
        </table>
          
        </div>
      </div>
    </div>
  </div>

   <!-- End List Of Class Fellow -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>