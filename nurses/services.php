<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services you Offer</h5>
                        <h1 class="display-4">Your Services</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
				<th>Service Name</th>
				<th>Description</th>
				<th>Price (USD)</th>
                <th>Edit</th>
                <th>Delete</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM services ORDER BY serviceID ASC");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><a href='edit-service.php?id=<?php echo $row['serviceID'] ?>' class='btn btn-info btn-xs'><i class="fa fa-edit"></i></a></td>
                <td><a href='delete-service.php?id=<?php echo $row['serviceID'] ?>' class='btn btn-danger btn-xs'><i class="fa fa-trash"></i></a></td>
			</tr>
                <?php $n++; }} else {echo "No Services Found";}?>	
		    </table>
            </div>

                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Add Service</h1>
                        <form action="save-service.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Service Name</label>
                                    <input name="name" type="text" class="form-control bg-white border-0" style="height:50px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control bg-white border-0" rows="4"></textarea>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Price ($)</label>
                                    <input name="price" type="number" class="form-control bg-white border-0" style="height: 50px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Add Service</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

<?php include "footer.php"; ?>