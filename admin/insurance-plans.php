<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medical Plans</h5>
                        <h1 class="display-4">Insurance Plans</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Prices</th>
                <th>Subscribers</th>
                <th>Edit</th>
                <th>Delete</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM insurance_plans ORDER BY planID ASC");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <th><?php echo $row['name'] ?></th>
                <td>Yearly: <?php echo $row['yearly_price'] ?>$ <br> Monthly: <?php echo $row['monthly_price'] ?>$</td>
                <td><a href='view-subscribers.php?id=<?php echo $row['planID'] ?>' class='btn btn-success btn-xs'><i class="fa fa-users"></i></a></td>
                <td><a href='edit-plan.php?id=<?php echo $row['planID'] ?>' class='btn btn-info btn-xs'><i class="fa fa-edit"></i></a></td>
                <td><a href='delete-plan.php?id=<?php echo $row['planID'] ?>' class='btn btn-danger btn-xs'><i class="fa fa-trash"></i></a></td>
			</tr>
                <?php $n++; }} else {echo "No plans Found";}?>	
		    </table>
            </div>

                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Add Insurance Plan</h1>
                        <form action="save-plan.php" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Plan Name</label>
                                    <input name="name" type="text" class="form-control bg-white border-0" style="height:50px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control bg-white border-0" rows="4"></textarea>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Image</label>
                                    <input name="img" type="file" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Price per Year ($)</label>
                                    <input name="yearly_price" type="number" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Price per Month ($)</label>
                                    <input name="monthly_price" type="number" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Add Plan</button>
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