<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Nurse Applications</h5>
                <h1 class="display-4">Upcoming Applications</h1>
            </div>
            <table class="table table-striped" style="color:black">
			<tr>
				<th>Application No.</th>
				<th>Nurse Name</th>
				<th>Contact Info</th>
				<th>Certificate & University</th>
                <th></th>
                <th></th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM nurse_applications ORDER BY applicationID");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></td>
                <td>Phone: <?php echo $row['phone'] ?><br>Email: <?php echo $row['email'] ?></td>
                <td><?php echo $row['certificate'] ?> from <?php echo $row['college'] ?></td>
                <td><a href='view-app-details.php?id=<?php echo $row['applicationID'] ?>' class='btn btn-info btn-xs'><i class="fa fa-eye"></i> View Details</a></td>
			
			</tr>
                <?php $n++; }} else {echo "No New Applications Found";}?>	
		    </table>
        </div>
    </div>



<?php include "footer.php"; ?>