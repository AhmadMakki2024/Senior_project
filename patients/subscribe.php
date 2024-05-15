<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>
<?php
$planid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM insurance_plans WHERE planID='$planid'");  
$row = mysqli_fetch_array($result);
?>

<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medical Plans</h5>
                        <h1 class="display-4"><?php echo $row['name'] ?></h1>
                        <img src="../insurance-img/<?php echo $row['image'] ?>" style="width:100%"/>
                        </div><div><p> <?php echo $row['description'] ?></p>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>Yearly Price</th>
                <td><?php echo $row['yearly_price'] ?>$</td>
            </tr>
            <tr>
				<th>Monthly Price</th>
                <td><?php echo $row['monthly_price'] ?>$</td>
			</tr>
		    </table>
            </div>
<?php 
$result = mysqli_query($con,"SELECT * FROM subscriptions WHERE planID='$planid' AND patientID='$pid'");
if(mysqli_num_rows($result)>0){
?>
<div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Subscribe to <?php echo $row['name'] ?> Plan</h1>
                        <form action="save-subscription.php?id=<?php echo $row['planID'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <h5 class="text-success">You are already a Subscriber in this plan</h5>
                            </div>
                        </form>
                    </div>
                </div>


<?php } else {?>

                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Subscribe to <?php echo $row['name'] ?> Plan</h1>
                        <form action="save-subscription.php?id=<?php echo $row['planID'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Choose Your Plan</label><br>
                                    <input name="price_method" type="radio" required value="Yearly"> Yearly Subscription: <?php echo $row['yearly_price'] ?>$
                                    <br>
                                    <input name="price_method" type="radio" required value="Monthy"> Monthly Subscription: <?php echo $row['monthly_price'] ?>$
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Choose Your Payment Method</label><br>
                                    <input name="payment_method" type="radio" required value="Paypal"> <i class="bi bi-paypal"></i> PayPal
                                    <br>
                                    <input name="payment_method" type="radio" required value="Credit Card"> <i class="bi bi-credit-card"></i> Credit Card
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

<?php include "footer.php"; ?>