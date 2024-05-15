<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
<?php
$aid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM availability WHERE availabilityID='$aid'");  
$row = mysqli_fetch_array($result);
?>
                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Edit Availability</h1>
                        <form action="update-availability.php?id=<?php echo $row['availabilityID'] ?>" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Choose Day</label>
                                    <select name="day" class="form-select bg-white border-0" style="height: 55px;">
                                    <option value="<?php echo $row['day'] ?>" selected>Selected: <?php echo $row['day'] ?></option>    
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
                                    <option value="<?php echo $row['work_time'] ?>" selected>Selected: <?php echo $row['work_time'] ?></option>
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
                                    <input value="<?php echo $row['price_per_hour'] ?>" name="price" type="number" class="form-control bg-white border-0" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Update Availability</button>
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