<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Work and Off Days</h5>
                        <h1 class="display-4">Your Availability</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
				<th>Day</th>
				<th>Work Time</th>
                <th>Total Working Hours</th>
				<th>Price per Hour (USD)</th>
                <th>Edit</th>
                <th>Delete</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM availability WHERE nurseID='$nid' ORDER BY availabilityID ASC");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
    $time = $row['work_time'];
$total_hours = 0;
    if($time == "Half Day (from 8:00 am to 2:00 pm)" || $time == "Half Day (from 2:00 pm to 8:00 pm)"){
        $total_hours = 6;
   }
   else if($time == "Full Day (from 8:00 am to 6:00 pm)"){
    $total_hours = 10;
}
else if($time == "Night Shift (from 8:00 pm to 6:00 am)"){
    $total_hours = 10;
}
else if($time == "24 Hours"){
    $total_hours = 24;
}
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['day'] ?></td>
                <td><?php echo $row['work_time'] ?></td>
                <td><?php echo $total_hours ?> hours</td>
                <td><?php echo $row['price_per_hour'] ?></td>
                <td><a href='edit-availability.php?id=<?php echo $row['availabilityID'] ?>' class='btn btn-info btn-xs'><i class="fa fa-edit"></i></a></td>
                <td><a href='delete-availability.php?id=<?php echo $row['availabilityID'] ?>' class='btn btn-danger btn-xs'><i class="fa fa-trash"></i></a></td>
			</tr>
                <?php $n++; }} else {echo "No Availability Found";}?>	
		    </table>
            </div>

                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Add Availability</h1>
                        <form action="save-availability.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Choose Day</label>
                                    <select name="day" class="form-select bg-white border-0" style="height: 55px;">
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Choose Work Time</label>
                                    <select name="time" class="form-select bg-white border-0" style="height: 55px;">
                                        <option value="Half Day (from 8:00 am to 2:00 pm)">Half Day (from 8:00 am to 2:00 pm)</option>
                                        <option value="Half Day (from 2:00 pm to 8:00 pm)">Half Day (from 2:00 pm to 8:00 pm)</option>
                                        <option value="Full Day (from 8:00 am to 6:00 pm)">Full Day (from 8:00 am to 6:00 pm)</option>
                                        <option value="Night Shift (from 8:00 pm to 6:00 am)">Night Shift (from 8:00 pm to 6:00 am)</option>
                                        <option value="24 Hours">24 Hours</option>
                                        <option value="Off Day">Off Day</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Price per hour ($)</label>
                                    <input name="price" type="number" class="form-control bg-white border-0" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Add Availability</button>
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