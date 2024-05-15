<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
<?php
$aid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM services WHERE serviceID='$aid'");  
$row = mysqli_fetch_array($result);
?>
                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Edit Service</h1>
                        <form action="update-service.php?id=<?php echo $row['serviceID'] ?>" method="POST">
                            <div class="row g-3">
                            <div class="col-12 col-sm-12">
                                    <label>Service Name</label>
                                    <input name="name" type="text" value="<?php echo $row['name'] ?>" class="form-control bg-white border-0" style="height:50px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Description</label>
                                    <input type="text" name="description" value="<?php echo $row['description'] ?>" class="form-control bg-white border-0" style="height:80px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Price ($)</label>
                                    <input name="price" type="number" value="<?php echo $row['price'] ?>" class="form-control bg-white border-0" style="height: 50px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Update Service</button>
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