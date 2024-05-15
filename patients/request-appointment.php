<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Work and Off Days</h5>
                        <h1 class="display-4">Nurse Availabilities</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
				<th>Day</th>
				<th>Work Time</th>
				<th>Price per Hour</th>
			</tr>
<?php
$nid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM availability WHERE nurseID='$nid' ORDER BY availabilityID asc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['day'] ?></td>
                <td><?php echo $row['work_time'] ?></td>
                <td><?php echo $row['price_per_hour'] ?>$</td>
			</tr>
                <?php $n++; }} else {echo "No Availability Found";}?>	
		    </table>
            </div>

                <!-- form -->
                <div class="col-lg-8">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Request Appointment</h1>
                        <form action="save-appointment.php?id=<?php echo $nid ?>" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Choose Day</label>
                                    <select name="availability" class="form-select bg-white border-0" style="height: 55px;" required>
                                        <option value="">Select Availability</option>
<?php
$result = mysqli_query($con,"SELECT * FROM availability WHERE nurseID='$nid' AND work_time!='Off Day'");
if(mysqli_num_rows($result)>0){  
while($row = mysqli_fetch_array($result)){
?>
                                        <option value="<?php echo $row['availabilityID'] ?>">
                                        <?php echo $row['day'] ?>: <?php echo $row['work_time'] ?> For <?php echo $row['price_per_hour'] ?>$ per hour</option>
                                       <?php }}?>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Choose Date</label>
                                    <input name="date" type="date" class="form-select bg-white border-0" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Choose Coming Time</label>
                                    <input name="coming_time" type="time" class="form-select bg-white border-0" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Request </button>
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