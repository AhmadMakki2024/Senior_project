<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Patients Registered</h5>
                <h1 class="display-4"><i class="fa fa-bed"></i> Patients</h1>
            </div>
            <table class="table table-striped" style="color:black">
			<tr>
				<th>Patient No.</th>
				<th>Patient Name</th>
				<th>Gender & Birthdate</th>
				<th>Contact Info</th>
                <th></th>
                <th></th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM patients ORDER BY patientID ASC");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <td><i class="fa fa-user"></i> <?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></td>
                        <?php if($row['gender']=="Male"){?>
                        <td><i class="fa fa-mars" style="color:blue"></i> <?php echo $row['gender'] ?>
                        <?php }else{?>
                        <td><i class="fa fa-venus" style="color:pink"></i> <?php echo $row['gender'] ?>
                        <?php } ?>
                <br><i class="fa fa-birthday-cake"></i> <?php echo $row['birthdate'] ?></td>
                <td><i class="bi bi-telephone-fill"></i> <?php echo $row['phone'] ?>
                <br><i class="bi bi-geo-alt-fill"></i> <?php echo $row['address'] ?></td>
			
			</tr>
                <?php $n++; }} else {echo "No Patients Found";}?>	
		    </table>
        </div>
    </div>



<?php include "footer.php"; ?>