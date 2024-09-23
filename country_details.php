<?php 
include("header.php");
$cn = $_GET['cn'];

$connect = mysqli_connect("localhost", "root", "", "uopcfs");

$qry = "SELECT * FROM countries WHERE countryName = '$cn'";
$qr = mysqli_query($connect, $qry);
$row = mysqli_fetch_assoc($qr);

?>

<div class="container mt-3">
	<div class="row">
		<div class="col-6 m-auto">
			<div class="card">
				<div class="card-header"><h1><?php echo $cn ?></h1></div>
				<div class="card-body">
					<table class="table table-fluid table-bordered table-hover">
						<thead>
							<tr>
								<th>Independance Year</th>
								<td><?php echo $row['countryndy'] ?></td>
								
								
							</tr>
							<tr>
								<th>Month</th>
								<td><?php echo $row['countryndm'] ?></td>
							</tr>
							<tr>
								<th>Date</th>
								<td><?php echo $row['countrynd'] ?></td>
							</tr>
							
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>




