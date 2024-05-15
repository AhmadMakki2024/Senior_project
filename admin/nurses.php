<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Team</h5>
                <h1 class="display-4"><i class="fa fa-user-md"></i> Nurses</h1>
            </div>
            <table class="table table-striped" style="color:black">
			<tr>
				<th>Nurse No.</th>
				<th>Nurse Name</th>
				<th>Contact Info</th>
				<th>Certificate & University</th>
                <th></th>
                <th></th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM nurses ORDER BY nurseID asc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></td>
                <td>Phone: <?php echo $row['phone'] ?><br>Email: <?php echo $row['email'] ?></td>
                <td><?php echo $row['certificate'] ?> from <?php echo $row['college'] ?></td>
                <td><a href='view-nurse-details.php?id=<?php echo $row['nurseID'] ?>' class='btn btn-info btn-xs'><i class="fa fa-eye"></i> View Details</a></td>
			
			</tr>
                <?php $n++; }} else {echo "No Nurses Found";}?>	
		    </table>
        </div>
    </div>



<?php include "footer.php"; ?>